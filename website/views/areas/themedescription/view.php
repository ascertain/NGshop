<?php 
	
	
	$themeobject=Object_Abstract::getById($this->getParam('theme'))
	?>
	<?php if(!empty($themeobject)) {  ?>
<center>
	
	<img src="<?= $themeobject->getThemeImage() ?>" style="margin-bottom:10px"/>
	</center>
	
	<div style="margin-left:80px; margin-bottom:25px;">
	<?= $themeobject->getDescription() ?>
		
		</div>
		
		<?php } ?>