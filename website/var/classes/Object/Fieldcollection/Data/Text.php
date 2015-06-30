<?php 

/** Generated at 2015-06-09T15:11:55+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class Text extends Object\Fieldcollection\Data\AbstractData  {

public $type = "Text";
public $text;


/**
* Get text - Text
* @return string
*/
public function getText () {
	$data = $this->text;
	 return $data;
}

/**
* Get text - Text
* @param string $text
* @return \Pimcore\Model\Object\Text
*/
public function setText ($text) {
	$this->text = $text;
	return $this;
}

}

