<?php 

/** Generated at 2015-06-09T09:33:47+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class SimilarityField extends Object\Fieldcollection\Data\AbstractData  {

public $type = "SimilarityField";
public $field;
public $weight;


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
* @return \Pimcore\Model\Object\SimilarityField
*/
public function setField ($field) {
	$this->field = $field;
	return $this;
}

/**
* Get weight - Weight
* @return float
*/
public function getWeight () {
	$data = $this->weight;
	 return $data;
}

/**
* Get weight - Weight
* @param float $weight
* @return \Pimcore\Model\Object\SimilarityField
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

}

