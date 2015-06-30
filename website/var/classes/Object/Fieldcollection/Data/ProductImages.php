<?php 

/** Generated at 2015-06-09T14:51:57+02:00 */

/**
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class ProductImages extends Object\Fieldcollection\Data\AbstractData  {

public $type = "productImages";
public $image;


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
* @return \Pimcore\Model\Object\ProductImages
*/
public function setImage ($image) {
	$this->image = $image;
	return $this;
}

}

