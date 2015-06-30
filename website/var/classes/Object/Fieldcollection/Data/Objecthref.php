<?php 

/** Generated at 2015-06-09T15:30:27+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class Objecthref extends Object\Fieldcollection\Data\AbstractData  {

public $type = "Objecthref";
public $textfooter;


/**
* Get textfooter - Object for footer vertical block 
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getTextfooter () {
	$data = $this->getDefinition()->getFieldDefinition("textfooter")->preGetData($this);
	 return $data;
}

/**
* Get textfooter - Object for footer vertical block 
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $textfooter
* @return \Pimcore\Model\Object\Objecthref
*/
public function setTextfooter ($textfooter) {
	$this->textfooter = $this->getDefinition()->getFieldDefinition("textfooter")->preSetData($this, $textfooter);
	return $this;
}

}

