<?php 

/** Generated at 2015-06-09T15:05:00+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class Footer extends Object\Fieldcollection\Data\AbstractData  {

public $type = "Footer";
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
* @return \Pimcore\Model\Object\Footer
*/
public function setTextfooter ($textfooter) {
	$this->textfooter = $this->getDefinition()->getFieldDefinition("textfooter")->preSetData($this, $textfooter);
	return $this;
}

}

