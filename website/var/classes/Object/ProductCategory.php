<?php 

/** Generated at 2015-06-09T13:01:57+02:00 */

/**
* Inheritance: yes
* Variants   : no
* Changed by : admin (2)
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\ProductCategory getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\ProductCategory getBySeoname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\ProductCategory getByFilterdefinition ($value, $limit = 0) 
*/

class ProductCategory extends \OnlineShop_Framework_AbstractCategory {

public $o_classId = 11;
public $o_className = "ProductCategory";
public $name;
public $seoname;
public $filterdefinition;


/**
* @param array $values
* @return \Pimcore\Model\Object\ProductCategory
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - name
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->name;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("name")->isEmpty($data)) {
		return $this->getValueFromParent("name");
	}
	return $data;
}

/**
* Set name - name
* @param string $name
* @return \Pimcore\Model\Object\ProductCategory
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get seoname - seoname
* @return string
*/
public function getSeoname () {
	$preValue = $this->preGetValue("seoname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->seoname;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("seoname")->isEmpty($data)) {
		return $this->getValueFromParent("seoname");
	}
	return $data;
}

/**
* Set seoname - seoname
* @param string $seoname
* @return \Pimcore\Model\Object\ProductCategory
*/
public function setSeoname ($seoname) {
	$this->seoname = $seoname;
	return $this;
}

/**
* Get filterdefinition - filterdefinition
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getFilterdefinition () {
	$preValue = $this->preGetValue("filterdefinition"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("filterdefinition")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("filterdefinition")->isEmpty($data)) {
		return $this->getValueFromParent("filterdefinition");
	}
	return $data;
}

/**
* Set filterdefinition - filterdefinition
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $filterdefinition
* @return \Pimcore\Model\Object\ProductCategory
*/
public function setFilterdefinition ($filterdefinition) {
	$this->filterdefinition = $this->getClass()->getFieldDefinition("filterdefinition")->preSetData($this, $filterdefinition);
	return $this;
}

protected static $_relationFields = array (
  'filterdefinition' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

