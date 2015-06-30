<?php 

/** Generated at 2015-06-09T13:47:11+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class Agefilter extends \OnlineShop_Framework_AbstractFilterDefinitionType  {

public $type = "Agefilter";
public $label;
public $field;
public $secondfield;
public $ranges;
public $preSelectFrom;
public $preSelectTo;
public $scriptPath;
public $unit;


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
* @return \Pimcore\Model\Object\Agefilter
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
* @return \Pimcore\Model\Object\Agefilter
*/
public function setField ($field) {
	$this->field = $field;
	return $this;
}

/**
* Get secondfield - Secondfield
* @return string
*/
public function getSecondfield () {
	$data = $this->secondfield;
	 return $data;
}

/**
* Get secondfield - Secondfield
* @param string $secondfield
* @return \Pimcore\Model\Object\Agefilter
*/
public function setSecondfield ($secondfield) {
	$this->secondfield = $secondfield;
	return $this;
}

/**
* Get ranges - Ranges
* @return array
*/
public function getRanges () {
	$data = $this->ranges;
	 return $data;
}

/**
* Get ranges - Ranges
* @param array $ranges
* @return \Pimcore\Model\Object\Agefilter
*/
public function setRanges ($ranges) {
	$this->ranges = $ranges;
	return $this;
}

/**
* Get preSelectFrom - pre Select From
* @return float
*/
public function getPreSelectFrom () {
	$data = $this->preSelectFrom;
	 return $data;
}

/**
* Get preSelectFrom - pre Select From
* @param float $preSelectFrom
* @return \Pimcore\Model\Object\Agefilter
*/
public function setPreSelectFrom ($preSelectFrom) {
	$this->preSelectFrom = $preSelectFrom;
	return $this;
}

/**
* Get preSelectTo - pre Select To
* @return float
*/
public function getPreSelectTo () {
	$data = $this->preSelectTo;
	 return $data;
}

/**
* Get preSelectTo - pre Select To
* @param float $preSelectTo
* @return \Pimcore\Model\Object\Agefilter
*/
public function setPreSelectTo ($preSelectTo) {
	$this->preSelectTo = $preSelectTo;
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
* @return \Pimcore\Model\Object\Agefilter
*/
public function setScriptPath ($scriptPath) {
	$this->scriptPath = $scriptPath;
	return $this;
}

/**
* Get unit - unit
* @return string
*/
public function getUnit () {
	$data = $this->unit;
	 return $data;
}

/**
* Get unit - unit
* @param string $unit
* @return \Pimcore\Model\Object\Agefilter
*/
public function setUnit ($unit) {
	$this->unit = $unit;
	return $this;
}

}

