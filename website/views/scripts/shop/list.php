<div class="">
    <div class="mainbody">
        <form id="js_filterfield" action="" method="get">
            <input type="hidden" name="is_reload" value="true" />
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
			
                    <div id="sidebar" class="sidebar-left">
					
                        <script type="text/javascript">
                            jQuery(document).ready(function() {
                                <?php if($this->filterDefinitionObject): ?>
                                    <?php if($this->filterDefinitionObject->getAjaxReload() === true): ?>
                                    shop.ajaxReload = true;
                                    <?php endif; ?>
                                    <?php if($this->filterDefinitionObject->getInfiniteScroll() === true): ?>
                                    shop.infiniteScroll = true;
                                    <?php endif; ?>
                                <?php endif; ?>
                            });
                        </script>
                        <?php if($this->filterDefinitionObject->getFilters()): ?>
                            <div class="widget">
                            <?php foreach ($this->filterDefinitionObject->getFilters() as $filter): ?>
                                <?= $this->filterService->getFilterFrontend($filter, $this->products, $this->currentFilter);?>
                            <?php endforeach; ?><!-- end widget -->
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
				

                <div class="col-lg-9 col-md-9 col-sm-9">
                    <h1 class="page-title"><?= $this->category ? $this->category->getName() : "" ?></h1>

                    <?php
                    echo $this->paginationControl($this->paginator,
                        'Sliding',
                        'shop/includes/pagination.php'
                    );
                    ?>

                    <div class="productList" id="js-productlist">
                        <?= $this->render('shop/list/products.php', array('products'=>$this->products, 'view'=>$this)) ?>
                    </div>
                </div>
            </div><!-- end row -->
        </form>
    </div><!-- end mainbody -->
</div><!-- end container -->