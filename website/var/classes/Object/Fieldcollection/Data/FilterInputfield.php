<?php 

/** Generated at 2015-06-09T09:33:46+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class FilterInputfield extends \OnlineShop_Framework_AbstractFilterDefinitionType  {

public $type = "FilterInputfield";
public $label;
public $field;
public $preSelect;
public $scriptPath;


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
* @return \Pimcore\Model\Object\FilterInputfield
*/
public function setLabel ($label) {
	$this->label = $label;
	return $this;
}

/**
* Get field - Field
* @return string
*/
public function getField () {
	$data = $this->field;
	 return $data;
}

/**
* Get field - Field
* @param string $field
* @return \Pimcore\Model\Object\FilterInputfield
*/
public function setField ($field) {
	$this->field = $field;
	return $this;
}

/**
* Get preSelect - PreSelect
* @return string
*/
public function getPreSelect () {
	$data = $this->preSelect;
	 return $data;
}

/**
* Get preSelect - PreSelect
* @param string $preSelect
* @return \Pimcore\Model\Object\FilterInputfield
*/
public function setPreSelect ($preSelect) {
	$this->preSelect = $preSelect;
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
* @return \Pimcore\Model\Object\FilterInputfield
*/
public function setScriptPath ($scriptPath) {
	$this->scriptPath = $scriptPath;
	return $this;
}

}

