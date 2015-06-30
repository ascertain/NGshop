<?php if($this->filterDefinitionObject && $this->filterDefinitionObject->getAjaxReload()) { ?>
    <?php $this->inlineScript()->appendFile("/static/js/lib/jquery.form.js"); ?>
    <?php $this->inlineScript()->appendFile("/static/js/lib/jquery.address-1.4.min.js"); ?>
    <?php $this->inlineScript()->appendFile("/static/js/gridfilters_ajax.js"); ?>
<?php } else { ?>
    <?php $this->inlineScript()->appendFile("/static/js/gridfilters.js"); ?>
<?php } ?>




<?php if ($this->editmode) { ?>
    <div class="span3">
    </div>
    <div class="span9">
	
	    <h2>Header Object</h2>

        <div>
            <?php echo $this->href('headergrid', array('types' => array('object'), 'subtypes' => array('object' => array('object')), 'classes' => array('cHeader'))); ?>
        </div>
		
        <h2>ProductFilter Object</h2>

        <div>
            <?php echo $this->href('productFilter', array('types' => array('object'), 'subtypes' => array('object' => array('object')), 'classes' => array('FilterDefinition'))); ?>
        </div>
    </div>

    <div style="clear:both"></div>

<?php } ?>

<?php if (!$this->href("productFilter")->isEmpty()) { ?>

    <?= $this->action("themelist", "shop", null, array("filterdefinition" =>$this->href("productFilter")->getElement(),"category"=>$this->getParam('parentCategoryIds'),"header"=>$this->href("headergrid")->getElement())) ?>

<?php } ?>