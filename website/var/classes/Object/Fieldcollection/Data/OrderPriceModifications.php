<?php 

/** Generated at 2015-06-09T09:33:47+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class OrderPriceModifications extends Object\Fieldcollection\Data\AbstractData  {

public $type = "OrderPriceModifications";
public $name;
public $amount;


/**
* Get name - Name
* @return string
*/
public function getName () {
	$data = $this->name;
	 return $data;
}

/**
* Get name - Name
* @param string $name
* @return \Pimcore\Model\Object\OrderPriceModifications
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get amount - Amount
* @return float
*/
public function getAmount () {
	$data = $this->amount;
	 return $data;
}

/**
* Get amount - Amount
* @param float $amount
* @return \Pimcore\Model\Object\OrderPriceModifications
*/
public function setAmount ($amount) {
	$this->amount = $amount;
	return $this;
}

}

