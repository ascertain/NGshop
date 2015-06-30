<?php 

/** Generated at 2015-06-09T09:33:47+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class PricingRule extends Object\Fieldcollection\Data\AbstractData  {

public $type = "PricingRule";
public $ruleId;
public $name;


/**
* Get ruleId - Rule Id
* @return float
*/
public function getRuleId () {
	$data = $this->ruleId;
	 return $data;
}

/**
* Get ruleId - Rule Id
* @param float $ruleId
* @return \Pimcore\Model\Object\PricingRule
*/
public function setRuleId ($ruleId) {
	$this->ruleId = $ruleId;
	return $this;
}

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
* @return \Pimcore\Model\Object\PricingRule
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

}

