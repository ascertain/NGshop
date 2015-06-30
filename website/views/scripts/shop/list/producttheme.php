<?php

    $themedetail = $this->themedetail;

//TODO find a better solution for that
  
  
   
   
   // $link = $linkProduct->getShopDetailLink($this->view);
?>
<div class="col-xl-3 col-md-3 nopadding theme-div">
    <div class="">
  
        <div class="image">
		<?php 
			
			 $front = Zend_Controller_Front::getInstance();
            $request = $front->getRequest();
			
			?>
            <a href="<?= $this->view->url(array('country' => $request->getParam('country'), 'name' => $themedetail['navigation'], 'theme' => $themedetail['id']), 'ngeshop-theme-products') ?>"><img src="<?=$themedetail['image']?>" alt="" style="  width: 100%;padding: 5px;"></a>
        </div>
        
    </div><!-- end product-item -->
</div>