<?php 

/** Generated at 2015-06-10T13:53:29+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\CHeader getByRightImage ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\CHeader getByCarouselImage ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\CHeader getByGiftImages ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\CHeader getByBestsellers ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\CHeader getByGiftfinderfilter ($value, $limit = 0) 
*/

class CHeader extends Concrete {

public $o_classId = 12;
public $o_className = "cHeader";
public $RightImage;
public $CarouselImage;
public $GiftImages;
public $bestsellers;
public $Giftfinderfilter;


/**
* @param array $values
* @return \Pimcore\Model\Object\CHeader
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* @return \Pimcore\Model\Object\Fieldcollection
*/
public function getRightImage () {
	$preValue = $this->preGetValue("RightImage"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("RightImage")->preGetData($this);
	 return $data;
}

/**
* Set RightImage - Image on right
* @param \Pimcore\Model\Object\Fieldcollection $RightImage
* @return \Pimcore\Model\Object\CHeader
*/
public function setRightImage ($RightImage) {
	$this->RightImage = $this->getClass()->getFieldDefinition("RightImage")->preSetData($this, $RightImage);
	return $this;
}

/**
* @return \Pimcore\Model\Object\Fieldcollection
*/
public function getCarouselImage () {
	$preValue = $this->preGetValue("CarouselImage"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("CarouselImage")->preGetData($this);
	 return $data;
}

/**
* Set CarouselImage - Carousel Images
* @param \Pimcore\Model\Object\Fieldcollection $CarouselImage
* @return \Pimcore\Model\Object\CHeader
*/
public function setCarouselImage ($CarouselImage) {
	$this->CarouselImage = $this->getClass()->getFieldDefinition("CarouselImage")->preSetData($this, $CarouselImage);
	return $this;
}

/**
* @return \Pimcore\Model\Object\Fieldcollection
*/
public function getGiftImages () {
	$preValue = $this->preGetValue("GiftImages"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("GiftImages")->preGetData($this);
	 return $data;
}

/**
* Set GiftImages - Images for Gift
* @param \Pimcore\Model\Object\Fieldcollection $GiftImages
* @return \Pimcore\Model\Object\CHeader
*/
public function setGiftImages ($GiftImages) {
	$this->GiftImages = $this->getClass()->getFieldDefinition("GiftImages")->preSetData($this, $GiftImages);
	return $this;
}

/**
* @return \Pimcore\Model\Object\Fieldcollection
*/
public function getBestsellers () {
	$preValue = $this->preGetValue("bestsellers"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("bestsellers")->preGetData($this);
	 return $data;
}

/**
* Set bestsellers - Best Sellers
* @param \Pimcore\Model\Object\Fieldcollection $bestsellers
* @return \Pimcore\Model\Object\CHeader
*/
public function setBestsellers ($bestsellers) {
	$this->bestsellers = $this->getClass()->getFieldDefinition("bestsellers")->preSetData($this, $bestsellers);
	return $this;
}

/**
* @return \Pimcore\Model\Object\Fieldcollection
*/
public function getGiftfinderfilter () {
	$preValue = $this->preGetValue("Giftfinderfilter"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("Giftfinderfilter")->preGetData($this);
	 return $data;
}

/**
* Set Giftfinderfilter - Filter for gift finder
* @param \Pimcore\Model\Object\Fieldcollection $Giftfinderfilter
* @return \Pimcore\Model\Object\CHeader
*/
public function setGiftfinderfilter ($Giftfinderfilter) {
	$this->Giftfinderfilter = $this->getClass()->getFieldDefinition("Giftfinderfilter")->preSetData($this, $Giftfinderfilter);
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

