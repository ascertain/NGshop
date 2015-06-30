<?php 

/** Generated at 2015-06-11T11:50:43+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class FilterTheme extends \OnlineShop_Framework_ThemeFilterDefinitionType  {

public $type = "FilterTheme";
public $label;
public $preSelect;
public $includeParentTheme;
public $scriptPath;
public $availableThemes;


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
* @return \Pimcore\Model\Object\FilterTheme
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
* @return \Pimcore\Model\Object\FilterTheme
*/
public function setPreSelect ($preSelect) {
	$this->preSelect = $this->getDefinition()->getFieldDefinition("preSelect")->preSetData($this, $preSelect);
	return $this;
}

/**
* Get includeParentTheme - include Parent Theme
* @return boolean
*/
public function getIncludeParentTheme () {
	$data = $this->includeParentTheme;
	 return $data;
}

/**
* Get includeParentTheme - include Parent Theme
* @param boolean $includeParentTheme
* @return \Pimcore\Model\Object\FilterTheme
*/
public function setIncludeParentTheme ($includeParentTheme) {
	$this->includeParentTheme = $includeParentTheme;
	return $this;
}

/**
* Get scriptPath - scriptPath
* @return string
*/
public function getScriptPath () {
	$data = $this->scriptPath;
	 return $data;
}

/**
* Get scriptPath - scriptPath
* @param string $scriptPath
* @return \Pimcore\Model\Object\FilterTheme
*/
public function setScriptPath ($scriptPath) {
	$this->scriptPath = $scriptPath;
	return $this;
}

/**
* Get availableThemes - available Themes
* @return array
*/
public function getAvailableThemes () {
	$data = $this->getDefinition()->getFieldDefinition("availableThemes")->preGetData($this);
	 return $data;
}

/**
* Get availableThemes - available Themes
* @param array $availableThemes
* @return \Pimcore\Model\Object\FilterTheme
*/
public function setAvailableThemes ($availableThemes) {
	$this->availableThemes = $this->getDefinition()->getFieldDefinition("availableThemes")->preSetData($this, $availableThemes);
	return $this;
}

}

