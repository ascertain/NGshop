



<?php if ($this->editmode) { ?>
    <div class="span3">
    </div>
    <div class="span9">
        <h2>Footer Object</h2>

        <div>
            <?php echo $this->href('footergrid', array('types' => array('object'), 'subtypes' => array('object' => array('object')), 'classes' => array('cFooter'))); ?>
        </div>
    </div>

    <div style="clear:both"></div>

<?php } ?>

<?php 
	
	 if (! $this->href("footergrid")->isEmpty()) { $footerelement=$this->href("footergrid")->getElement(); ?>
	

<div class="ngeMainWrapper ngeAllThemesAsText col-lg-9 col-md-9 col-sm-9 pull-right nopadding">
    <div class="ngeHeader">
        <h6>Navigate all LEGO Themes and Categories</h6>
    </div>
    <div class="ngeContent">
        <ul>
	
	<?php $items=$footerelement->getFooterfield()->items;foreach($items as $item)  { ?>
		
            <li class="ngeThemes">
                <ul>
				
				<?php $items1=$item->getTextfooter()->getFooterobjectdata()->items;foreach($items1 as $item1) { ?> 
				
                    <li><a href="#"><?= $item1->getText () ?> </a></li>
                  
					
					
				<?php } ?>
					
                </ul>
            </li>
            
			
			
			<?php } ?> 
        </ul>
        <div class="ngeFooter"></div>
    </div>
    <div class="ngeFooter">
    </div>
</div>

<?php } ?>
