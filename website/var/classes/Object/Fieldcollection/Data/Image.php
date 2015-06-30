<?php 

/** Generated at 2015-06-10T14:10:04+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class Image extends Object\Fieldcollection\Data\AbstractData  {

public $type = "Image";
public $text;
public $image;
public $classstyle;


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
* @return \Pimcore\Model\Object\Image
*/
public function setText ($text) {
	$this->text = $text;
	return $this;
}

/**
* Get image - Image
* @return \Pimcore\Model\Asset\Image
*/
public function getImage () {
	$data = $this->image;
	 return $data;
}

/**
* Get image - Image
* @param \Pimcore\Model\Asset\Image $image
* @return \Pimcore\Model\Object\Image
*/
public function setImage ($image) {
	$this->image = $image;
	return $this;
}

/**
* Get classstyle - classstyle
* @return string
*/
public function getClassstyle () {
	$data = $this->classstyle;
	 return $data;
}

/**
* Get classstyle - classstyle
* @param string $classstyle
* @return \Pimcore\Model\Object\Image
*/
public function setClassstyle ($classstyle) {
	$this->classstyle = $classstyle;
	return $this;
}

}

