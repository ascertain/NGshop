<?php 

/** Generated at 2015-06-11T16:36:27+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Theme getByText ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Theme getByImage ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Theme getByDescription ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Theme getByThemeImage ($value, $limit = 0) 
*/

class Theme extends Concrete {

public $o_classId = 15;
public $o_className = "Theme";
public $Text;
public $Image;
public $description;
public $ThemeImage;


/**
* @param array $values
* @return \Pimcore\Model\Object\Theme
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get Text - Enter Theme Name
* @return string
*/
public function getText () {
	$preValue = $this->preGetValue("Text"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Text;
	return $data;
}

/**
* Set Text - Enter Theme Name
* @param string $Text
* @return \Pimcore\Model\Object\Theme
*/
public function setText ($Text) {
	$this->Text = $Text;
	return $this;
}

/**
* Get Image - Enter Theme Image
* @return \Pimcore\Model\Asset\Image
*/
public function getImage () {
	$preValue = $this->preGetValue("Image"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->Image;
	return $data;
}

/**
* Set Image - Enter Theme Image
* @param \Pimcore\Model\Asset\Image $Image
* @return \Pimcore\Model\Object\Theme
*/
public function setImage ($Image) {
	$this->Image = $Image;
	return $this;
}

/**
* Get description - Enter Theme description
* @return string
*/
public function getDescription () {
	$preValue = $this->preGetValue("description"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("description")->preGetData($this);
	return $data;
}

/**
* Set description - Enter Theme description
* @param string $description
* @return \Pimcore\Model\Object\Theme
*/
public function setDescription ($description) {
	$this->description = $description;
	return $this;
}

/**
* Get ThemeImage - ThemeImage
* @return \Pimcore\Model\Asset\Image
*/
public function getThemeImage () {
	$preValue = $this->preGetValue("ThemeImage"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ThemeImage;
	return $data;
}

/**
* Set ThemeImage - ThemeImage
* @param \Pimcore\Model\Asset\Image $ThemeImage
* @return \Pimcore\Model\Object\Theme
*/
public function setThemeImage ($ThemeImage) {
	$this->ThemeImage = $ThemeImage;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

