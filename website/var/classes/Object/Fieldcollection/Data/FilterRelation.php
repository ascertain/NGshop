<?php 

/** Generated at 2015-06-09T09:33:47+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class FilterRelation extends \OnlineShop_Framework_AbstractFilterDefinitionType  {

public $type = "FilterRelation";
public $label;
public $field;
public $scriptPath;
public $availableRelations;


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
* @return \Pimcore\Model\Object\FilterRelation
*/
public function setLabel ($label) {
	$this->label = $label;
	return $this;
}

/**
* Get field - Field
* @return Object_Data_IndexFieldSelection
*/
public function getField () {
	$data = $this->field;
	 return $data;
}

/**
* Get field - Field
* @param Object_Data_IndexFieldSelection $field
* @return \Pimcore\Model\Object\FilterRelation
*/
public function setField ($field) {
	$this->field = $field;
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
* @return \Pimcore\Model\Object\FilterRelation
*/
public function setScriptPath ($scriptPath) {
	$this->scriptPath = $scriptPath;
	return $this;
}

/**
* Get availableRelations - Available Relations
* @return array
*/
public function getAvailableRelations () {
	$data = $this->getDefinition()->getFieldDefinition("availableRelations")->preGetData($this);
	 return $data;
}

/**
* Get availableRelations - Available Relations
* @param array $availableRelations
* @return \Pimcore\Model\Object\FilterRelation
*/
public function setAvailableRelations ($availableRelations) {
	$this->availableRelations = $this->getDefinition()->getFieldDefinition("availableRelations")->preSetData($this, $availableRelations);
	return $this;
}

}

