<?php 

/** Generated at 2015-06-11T09:50:06+02:00 */

/**
* Inheritance: yes
* Variants   : yes
* Changed by : admin (2)
* IP:          127.0.0.1
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Product getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getBySeoname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByImages ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByImagesInheritance ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByColor ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByPrice_product ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByCategories ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByLoweragelimit ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByUpperagelimit ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByGender ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByTheme ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByDescription ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByMaterial ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByArtno ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByEan ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getBySize ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByBrand ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByFeatures ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByTechnologies ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByAttributes ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByCollection ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Product getByRelatedProducts ($value, $limit = 0) 
*/

class Product extends \OnlineShop_Framework_AbstractProduct {

public $o_classId = 10;
public $o_className = "Product";
public $name;
public $seoname;
public $images;
public $imagesInheritance;
public $color;
public $price_product;
public $categories;
public $loweragelimit;
public $upperagelimit;
public $gender;
public $theme;
public $description;
public $material;
public $artno;
public $ean;
public $size;
public $brand;
public $features;
public $technologies;
public $attributes;
public $collection;
public $relatedProducts;


/**
* @param array $values
* @return \Pimcore\Model\Object\Product
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - name
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->name;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("name")->isEmpty($data)) {
		return $this->getValueFromParent("name");
	}
	return $data;
}

/**
* Set name - name
* @param string $name
* @return \Pimcore\Model\Object\Product
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get seoname - seoname
* @return string
*/
public function getSeoname () {
	$preValue = $this->preGetValue("seoname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->seoname;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("seoname")->isEmpty($data)) {
		return $this->getValueFromParent("seoname");
	}
	return $data;
}

/**
* Set seoname - seoname
* @param string $seoname
* @return \Pimcore\Model\Object\Product
*/
public function setSeoname ($seoname) {
	$this->seoname = $seoname;
	return $this;
}

/**
* @return \Pimcore\Model\Object\Fieldcollection
*/
public function getImages () {
	$preValue = $this->preGetValue("images"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("images")->preGetData($this);
	 return $data;
}

/**
* Set images - Images
* @param \Pimcore\Model\Object\Fieldcollection $images
* @return \Pimcore\Model\Object\Product
*/
public function setImages ($images) {
	$this->images = $this->getClass()->getFieldDefinition("images")->preSetData($this, $images);
	return $this;
}

/**
* Get imagesInheritance - Inheritance
* @return string
*/
public function getImagesInheritance () {
	$preValue = $this->preGetValue("imagesInheritance"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->imagesInheritance;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("imagesInheritance")->isEmpty($data)) {
		return $this->getValueFromParent("imagesInheritance");
	}
	return $data;
}

/**
* Set imagesInheritance - Inheritance
* @param string $imagesInheritance
* @return \Pimcore\Model\Object\Product
*/
public function setImagesInheritance ($imagesInheritance) {
	$this->imagesInheritance = $imagesInheritance;
	return $this;
}

/**
* Get color - color
* @return array
*/
public function getColor () {
	$preValue = $this->preGetValue("color"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->color;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("color")->isEmpty($data)) {
		return $this->getValueFromParent("color");
	}
	return $data;
}

/**
* Set color - color
* @param array $color
* @return \Pimcore\Model\Object\Product
*/
public function setColor ($color) {
	$this->color = $color;
	return $this;
}

/**
* Get price_product - price_product
* @return float
*/
public function getPrice_product () {
	$preValue = $this->preGetValue("price_product"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->price_product;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("price_product")->isEmpty($data)) {
		return $this->getValueFromParent("price_product");
	}
	return $data;
}

/**
* Set price_product - price_product
* @param float $price_product
* @return \Pimcore\Model\Object\Product
*/
public function setPrice_product ($price_product) {
	$this->price_product = $price_product;
	return $this;
}

/**
* Get categories - Categories
* @return array
*/
public function getCategories () {
	$preValue = $this->preGetValue("categories"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("categories")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("categories")->isEmpty($data)) {
		return $this->getValueFromParent("categories");
	}
	return $data;
}

/**
* Set categories - Categories
* @param array $categories
* @return \Pimcore\Model\Object\Product
*/
public function setCategories ($categories) {
	$this->categories = $this->getClass()->getFieldDefinition("categories")->preSetData($this, $categories);
	return $this;
}

/**
* Get loweragelimit - LowerageLimit for product
* @return float
*/
public function getLoweragelimit () {
	$preValue = $this->preGetValue("loweragelimit"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->loweragelimit;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("loweragelimit")->isEmpty($data)) {
		return $this->getValueFromParent("loweragelimit");
	}
	return $data;
}

/**
* Set loweragelimit - LowerageLimit for product
* @param float $loweragelimit
* @return \Pimcore\Model\Object\Product
*/
public function setLoweragelimit ($loweragelimit) {
	$this->loweragelimit = $loweragelimit;
	return $this;
}

/**
* Get upperagelimit - upperagelimit
* @return float
*/
public function getUpperagelimit () {
	$preValue = $this->preGetValue("upperagelimit"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->upperagelimit;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("upperagelimit")->isEmpty($data)) {
		return $this->getValueFromParent("upperagelimit");
	}
	return $data;
}

/**
* Set upperagelimit - upperagelimit
* @param float $upperagelimit
* @return \Pimcore\Model\Object\Product
*/
public function setUpperagelimit ($upperagelimit) {
	$this->upperagelimit = $upperagelimit;
	return $this;
}

/**
* Get gender - Select gender for whom product is likely to be
* @return array
*/
public function getGender () {
	$preValue = $this->preGetValue("gender"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->gender;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("gender")->isEmpty($data)) {
		return $this->getValueFromParent("gender");
	}
	return $data;
}

/**
* Set gender - Select gender for whom product is likely to be
* @param array $gender
* @return \Pimcore\Model\Object\Product
*/
public function setGender ($gender) {
	$this->gender = $gender;
	return $this;
}

/**
* Get theme - Select theme for the product
* @return array
*/
public function getTheme () {
	$preValue = $this->preGetValue("theme"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("theme")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("theme")->isEmpty($data)) {
		return $this->getValueFromParent("theme");
	}
	return $data;
}

/**
* Set theme - Select theme for the product
* @param array $theme
* @return \Pimcore\Model\Object\Product
*/
public function setTheme ($theme) {
	$this->theme = $this->getClass()->getFieldDefinition("theme")->preSetData($this, $theme);
	return $this;
}

/**
* Get description - Description
* @return string
*/
public function getDescription () {
	$preValue = $this->preGetValue("description"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("description")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("description")->isEmpty($data)) {
		return $this->getValueFromParent("description");
	}
	return $data;
}

/**
* Set description - Description
* @param string $description
* @return \Pimcore\Model\Object\Product
*/
public function setDescription ($description) {
	$this->description = $description;
	return $this;
}

/**
* Get material - Material
* @return string
*/
public function getMaterial () {
	$preValue = $this->preGetValue("material"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("material")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("material")->isEmpty($data)) {
		return $this->getValueFromParent("material");
	}
	return $data;
}

/**
* Set material - Material
* @param string $material
* @return \Pimcore\Model\Object\Product
*/
public function setMaterial ($material) {
	$this->material = $material;
	return $this;
}

/**
* Get artno - artno
* @return string
*/
public function getArtno () {
	$preValue = $this->preGetValue("artno"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->artno;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("artno")->isEmpty($data)) {
		return $this->getValueFromParent("artno");
	}
	return $data;
}

/**
* Set artno - artno
* @param string $artno
* @return \Pimcore\Model\Object\Product
*/
public function setArtno ($artno) {
	$this->artno = $artno;
	return $this;
}

/**
* Get ean - ean
* @return string
*/
public function getEan () {
	$preValue = $this->preGetValue("ean"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ean;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("ean")->isEmpty($data)) {
		return $this->getValueFromParent("ean");
	}
	return $data;
}

/**
* Set ean - ean
* @param string $ean
* @return \Pimcore\Model\Object\Product
*/
public function setEan ($ean) {
	$this->ean = $ean;
	return $this;
}

/**
* Get size - size
* @return string
*/
public function getSize () {
	$preValue = $this->preGetValue("size"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->size;
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("size")->isEmpty($data)) {
		return $this->getValueFromParent("size");
	}
	return $data;
}

/**
* Set size - size
* @param string $size
* @return \Pimcore\Model\Object\Product
*/
public function setSize ($size) {
	$this->size = $size;
	return $this;
}

/**
* Get brand - brand
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getBrand () {
	$preValue = $this->preGetValue("brand"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("brand")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("brand")->isEmpty($data)) {
		return $this->getValueFromParent("brand");
	}
	return $data;
}

/**
* Set brand - brand
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $brand
* @return \Pimcore\Model\Object\Product
*/
public function setBrand ($brand) {
	$this->brand = $this->getClass()->getFieldDefinition("brand")->preSetData($this, $brand);
	return $this;
}

/**
* Get features - features
* @return array
*/
public function getFeatures () {
	$preValue = $this->preGetValue("features"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("features")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("features")->isEmpty($data)) {
		return $this->getValueFromParent("features");
	}
	return $data;
}

/**
* Set features - features
* @param array $features
* @return \Pimcore\Model\Object\Product
*/
public function setFeatures ($features) {
	$this->features = $this->getClass()->getFieldDefinition("features")->preSetData($this, $features);
	return $this;
}

/**
* Get technologies - technologies
* @return array
*/
public function getTechnologies () {
	$preValue = $this->preGetValue("technologies"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("technologies")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("technologies")->isEmpty($data)) {
		return $this->getValueFromParent("technologies");
	}
	return $data;
}

/**
* Set technologies - technologies
* @param array $technologies
* @return \Pimcore\Model\Object\Product
*/
public function setTechnologies ($technologies) {
	$this->technologies = $this->getClass()->getFieldDefinition("technologies")->preSetData($this, $technologies);
	return $this;
}

/**
* Get attributes - attributes
* @return array
*/
public function getAttributes () {
	$preValue = $this->preGetValue("attributes"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("attributes")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("attributes")->isEmpty($data)) {
		return $this->getValueFromParent("attributes");
	}
	return $data;
}

/**
* Set attributes - attributes
* @param array $attributes
* @return \Pimcore\Model\Object\Product
*/
public function setAttributes ($attributes) {
	$this->attributes = $this->getClass()->getFieldDefinition("attributes")->preSetData($this, $attributes);
	return $this;
}

/**
* Get collection - collection
* @return array
*/
public function getCollection () {
	$preValue = $this->preGetValue("collection"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("collection")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("collection")->isEmpty($data)) {
		return $this->getValueFromParent("collection");
	}
	return $data;
}

/**
* Set collection - collection
* @param array $collection
* @return \Pimcore\Model\Object\Product
*/
public function setCollection ($collection) {
	$this->collection = $this->getClass()->getFieldDefinition("collection")->preSetData($this, $collection);
	return $this;
}

/**
* Get relatedProducts - relatedProducts
* @return array
*/
public function getRelatedProducts () {
	$preValue = $this->preGetValue("relatedProducts"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("relatedProducts")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues() && $this->getClass()->getFieldDefinition("relatedProducts")->isEmpty($data)) {
		return $this->getValueFromParent("relatedProducts");
	}
	return $data;
}

/**
* Set relatedProducts - relatedProducts
* @param array $relatedProducts
* @return \Pimcore\Model\Object\Product
*/
public function setRelatedProducts ($relatedProducts) {
	$this->relatedProducts = $this->getClass()->getFieldDefinition("relatedProducts")->preSetData($this, $relatedProducts);
	return $this;
}

protected static $_relationFields = array (
  'categories' => 
  array (
    'type' => 'objects',
  ),
  'theme' => 
  array (
    'type' => 'objects',
  ),
  'brand' => 
  array (
    'type' => 'href',
  ),
  'features' => 
  array (
    'type' => 'objects',
  ),
  'technologies' => 
  array (
    'type' => 'objects',
  ),
  'attributes' => 
  array (
    'type' => 'objects',
  ),
  'collection' => 
  array (
    'type' => 'objects',
  ),
  'relatedProducts' => 
  array (
    'type' => 'objects',
  ),
);

public $lazyLoadedFields = NULL;

}

