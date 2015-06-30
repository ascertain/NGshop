<?php 

/** Generated at 2015-06-09T15:26:10+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\CFooterObject getByFooterobjectdata ($value, $limit = 0) 
*/

class CFooterObject extends Concrete {

public $o_classId = 14;
public $o_className = "cFooterObject";
public $footerobjectdata;


/**
* @param array $values
* @return \Pimcore\Model\Object\CFooterObject
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* @return \Pimcore\Model\Object\Fieldcollection
*/
public function getFooterobjectdata () {
	$preValue = $this->preGetValue("footerobjectdata"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("footerobjectdata")->preGetData($this);
	 return $data;
}

/**
* Set footerobjectdata - Object for footer fields
* @param \Pimcore\Model\Object\Fieldcollection $footerobjectdata
* @return \Pimcore\Model\Object\CFooterObject
*/
public function setFooterobjectdata ($footerobjectdata) {
	$this->footerobjectdata = $this->getClass()->getFieldDefinition("footerobjectdata")->preSetData($this, $footerobjectdata);
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

