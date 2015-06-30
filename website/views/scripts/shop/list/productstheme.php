<div class="row" style="margin-right: -5px;">
    <?php $i=0; foreach($this->themedetails as $themedetail): $i++; ?>
        <?= $this->partial('shop/list/producttheme.php', array('themedetail'=> $themedetail, 'view'=>$this)) ?>
<?php if($i%5 == 0): ?>

</div>

<div class="row <?= $i ?>" style="margin-right: -5px;">
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<!-- end row -->
