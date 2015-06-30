<?php 

/** Generated at 2015-06-09T09:33:46+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class FilterCategory extends \OnlineShop_Framework_CategoryFilterDefinitionType  {

public $type = "FilterCategory";
public $label;
public $preSelect;
public $includeParentCategories;
public $scriptPath;
public $availableCategories;


/**
* Get label - Label
* @return string
*/
public function getLabel () {
	$data = $this->label;
	 return $data;
}

/**
* Get label - Label
* @param string $label
* @return \Pimcore\Model\Object\FilterCategory
*/
public function setLabel ($label) {
	$this->label = $label;
	return $this;
}

/**
* Get preSelect - Pre Select
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getPreSelect () {
	$data = $this->getDefinition()->getFieldDefinition("preSelect")->preGetData($this);
	 return $data;
}

/**
* Get preSelect - Pre Select
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $preSelect
* @return \Pimcore\Model\Object\FilterCategory
*/
public function setPreSelect ($preSelect) {
	$this->preSelect = $this->getDefinition()->getFieldDefinition("preSelect")->preSetData($this, $preSelect);
	return $this;
}

/**
* Get includeParentCategories - Include SubCategories
* @return boolean
*/
public function getIncludeParentCategories () {
	$data = $this->includeParentCategories;
	 return $data;
}

/**
* Get includeParentCategories - Include SubCategories
* @param boolean $includeParentCategories
* @return \Pimcore\Model\Object\FilterCategory
*/
public function setIncludeParentCategories ($includeParentCategories) {
	$this->includeParentCategories = $includeParentCategories;
	return $this;
}

/**
* Get scriptPath - Script Path
* @return string
*/
public function getScriptPath () {
	$data = $this->scriptPath;
	 return $data;
}

/**
* Get scriptPath - Script Path
* @param string $scriptPath
* @return \Pimcore\Model\Object\FilterCategory
*/
public function setScriptPath ($scriptPath) {
	$this->scriptPath = $scriptPath;
	return $this;
}

/**
* Get availableCategories - Available Categories
* @return array
*/
public function getAvailableCategories () {
	$data = $this->getDefinition()->getFieldDefinition("availableCategories")->preGetData($this);
	 return $data;
}

/**
* Get availableCategories - Available Categories
* @param array $availableCategories
* @return \Pimcore\Model\Object\FilterCategory
*/
public function setAvailableCategories ($availableCategories) {
	$this->availableCategories = $this->getDefinition()->getFieldDefinition("availableCategories")->preSetData($this, $availableCategories);
	return $this;
}

}

