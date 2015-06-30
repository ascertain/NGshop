<?php 

/** Generated at 2015-06-09T09:33:47+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class VoucherTokenTypeSingle extends \OnlineShop_Framework_AbstractVoucherTokenType  {

public $type = "VoucherTokenTypeSingle";
public $token;
public $usages;


/**
* Get token - Token
* @return string
*/
public function getToken () {
	$data = $this->token;
	 return $data;
}

/**
* Get token - Token
* @param string $token
* @return \Pimcore\Model\Object\VoucherTokenTypeSingle
*/
public function setToken ($token) {
	$this->token = $token;
	return $this;
}

/**
* Get usages - Usage count
* @return float
*/
public function getUsages () {
	$data = $this->usages;
	 return $data;
}

/**
* Get usages - Usage count
* @param float $usages
* @return \Pimcore\Model\Object\VoucherTokenTypeSingle
*/
public function setUsages ($usages) {
	$this->usages = $usages;
	return $this;
}

}

