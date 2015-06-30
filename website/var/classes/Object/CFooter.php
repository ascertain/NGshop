<?php 

/** Generated at 2015-06-09T15:30:39+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\CFooter getByFooterfield ($value, $limit = 0) 
*/

class CFooter extends Concrete {

public $o_classId = 13;
public $o_className = "cFooter";
public $footerfield;


/**
* @param array $values
* @return \Pimcore\Model\Object\CFooter
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* @return \Pimcore\Model\Object\Fieldcollection
*/
public function getFooterfield () {
	$preValue = $this->preGetValue("footerfield"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("footerfield")->preGetData($this);
	 return $data;
}

/**
* Set footerfield - Footer vertical block
* @param \Pimcore\Model\Object\Fieldcollection $footerfield
* @return \Pimcore\Model\Object\CFooter
*/
public function setFooterfield ($footerfield) {
	$this->footerfield = $this->getClass()->getFieldDefinition("footerfield")->preSetData($this, $footerfield);
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

