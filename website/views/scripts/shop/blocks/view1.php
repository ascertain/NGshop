



<?php 
	
	$headerelement=$this->header; ?>
	

	<!-- DAI: Header Starts Here -->
	
	
		
		  
		<!-- DAI: Header Ends Here -->
	
		
		<div class="col-xl-9 col-md-9 col-sm-9 nopadding">
			<div class="col-xl-9 col-md-9 col-sm-9 nopadding carousel-div" >				
				<!--Carousel Ctrl Starts Here-->
				
				<!--Carousel Ctrl Ends Here-->


				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
					  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					  <li data-target="#myCarousel" data-slide-to="1"></li>
					  <li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
					  <?php $i=0; ?>
					  <?php $items=$headerelement->getCarouselImage()->items;foreach($items as $item)  { ?>
					  <?php if($i==0) { ?>
					<div class="item active">
						<img style="width:100%" src="<?php echo $item->getImage() ?>" alt="Chania" width="460" height="345">
					  </div>
					  
					  <?php } else { ?>
					  <div class="item">
						<img style="width:100%" src="<?php echo $item->getImage() ?>" alt="Chania" width="460" height="345">
					  </div>
					  <?php } ?>
					  <?php $i++;} ?>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
			   </div>



				<!--Gift Ctrl Starts Here -->
				<?php if(!empty($headerelement->getGiftImages()->items)) { ?>
					<div class="ngeMainWrapper ngeAgeCenter">
						<div class="ngeHeader">
							<h6>Gifts for any age:</h6>
						</div>
						<ul>
						<?php $items=$headerelement->getGiftImages()->items;foreach($items as $item)  { ?>
							
							<li class="<?php echo $item->getClassstyle() ?>">
								<a href="#">
									<div class="ngeInner">
										
										<img src="<?php echo $item->getImage() ?>" style="width:100%"/>
										<h6>
											<?php echo $item->getText() ?>
										</h6>
									</div>
								</a>
							</li>
						  <?php } ?>
						</ul>
						<div class="ngeFooter"></div>
					</div>
				<?php } ?>
				<!--Gift Ctrl Ends Here -->
		
			</div>
			<div class="col-xl-3 col-md-3 col-sm-3">	<!--nopadding-->			
				<!--Side Panel Starts Here-->
				<div>	
					<?php $itemsrightnav=$headerelement->getRightImage()->items;foreach($itemsrightnav as $itemrightnav)  { ?>
				
						<div class="media">					  
							<a href="#">
								 <img class="media-object" alt="64x64" src="<?php echo $itemrightnav->getImage() ?>" style="width: 100%;">
							</a>
						</div>					
					<?php } ?>
				</div>
				<!--Side Panel Ends Here-->
			</div>

		
		
		
		


		


		


</div>



<?php if(!empty($headerelement->getGiftfinderfilter()->items)) { ?>

<div class="ngeMainWrapper ngeGiftFinder ngeOnecol">
    <div class="ngeHeader">
        <h6>Gift finder</h6>
    </div>
    <div class="main ngeContent">
        <div class="ngeFinder ngeContent">
            <ul>
			
			<?php $itemsfilter=$headerelement->getGiftfinderfilter()->items;foreach($itemsfilter as $itemfilter) { ?>
                <li class="ngePrice">
                    <div class="ngeInner">
                        <p class="ngeLeft">
                            <?= $itemfilter->getHeading() ?>
                            <input data-name="ngeGiftFinderPriceMin" type="hidden" />
                            <input data-name="ngeGiftFinderPriceMax" type="hidden" />
                        </p>
                        <div class="ngeRight">
						
						<?php $subcategories=$itemfilter->getSubcategories();if(empty($subcategories)) { ?> 
						 <div class="ngeSliderWrapper">
                                <div class="ngeSlider"></div>
                            </div>
							
							<?php } else { $subcategoriesgift=$subcategories->getSubcategory()->items;foreach($subcategoriesgift as $subcategory): ?>
						<label class="ngeLabel">
                                <input type="checkbox" class="ngeCheckbox" data-name="ngeGiftFinderUniverse" value="fantasy" /><?= $subcategory->getText()  ?></label>
                           
						<?php endforeach; ?>
                           
							
							<?php } ?>
                        </div>
                    </div>
                </li>
              <?php } ?>
                
            </ul>
        </div>
        <div class="ngeRecommendations ngeSection">
            <div class="ngeHeader">
                <p><span class="recommendationCount"></span>&nbsp;recommendations:</p>
            </div>
            <div class="ngeContent">
                <div class="ngeCarousel">
                    <ul data-active="0" data-count="5">
                        <li class="ngeProduct"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ngeFooter"></div>
</div>


<?php } ?>





<?php if(!empty($headerelement->getBestsellers()->items)) { ?>
	
	<div class="ngeMainWrapper ngeTopList ngeTwocols">
    <div class="ngeHeader">
        <a class="ngeButton" href="#">See more top sellers!</a>
        <h6>Best sellers</h6>
    </div>
    <div class="ngeContent">
        <ul>
		
		<?php $itemsseller=$headerelement->getBestsellers()->items;foreach($itemsseller as $itemseller) { ?>
            <li class="ngeProduct">
                <a href="http://shop.lego.com/en-DK/Adventure-Camper-3184">
                    <div class="ngeInner">
                        <div class="ngeImagewrapper">
                            <img src="<?= $itemseller->getImage()  ?>">
                        </div>
                        <p>
                            <strong class="ngeProductname"><?= $itemseller->getText()  ?></strong>
                        </p>
                    </div>
                </a>
            </li>
            <?php } ?>
        </ul>
        <div class="ngeFooter"></div>
    </div>
    <div class="ngeFooter">
        <a class="ngeButton" href="#">See more top sellers!</a>
    </div>
</div>

	
	<?php } ?> 
	



<?php  ?>

