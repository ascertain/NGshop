UPDATE `classes` SET `id` = 10, `name` = 'Product', `description` = '', `creationDate` = 1433841364, `modificationDate` = 1433949152, `userOwner` = 2, `userModification` = 2, `parentClass` = 'OnlineShop_Framework_AbstractProduct', `useTraits` = '', `allowInherit` = 1, `allowVariants` = 1, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 10);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_10` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '10',
			  `oo_className` varchar(255) default 'Product',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_10` ALTER COLUMN `oo_className` SET DEFAULT 'Product';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_10` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_10` (
          `src_id` int(11) NOT NULL DEFAULT '0',
          `dest_id` int(11) NOT NULL DEFAULT '0',
          `type` varchar(50) NOT NULL DEFAULT '',
          `fieldname` varchar(70) NOT NULL DEFAULT '0',
          `index` int(11) unsigned NOT NULL DEFAULT '0',
          `ownertype` enum('object','fieldcollection','localizedfield','objectbrick') NOT NULL DEFAULT 'object',
          `ownername` varchar(70) NOT NULL DEFAULT '',
          `position` varchar(70) NOT NULL DEFAULT '0',
          PRIMARY KEY (`src_id`,`dest_id`,`ownertype`,`ownername`,`fieldname`,`type`,`position`),
          KEY `index` (`index`),
          KEY `src_id` (`src_id`),
          KEY `dest_id` (`dest_id`),
          KEY `fieldname` (`fieldname`),
          KEY `position` (`position`),
          KEY `ownertype` (`ownertype`),
          KEY `type` (`type`),
          KEY `ownername` (`ownername`)
        ) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_name`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_name`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_seoname`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_seoname`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_images`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_images`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_imagesInheritance`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_imagesInheritance`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_color`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_color`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_price_product`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_price_product`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_categories`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_categories`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_loweragelimit`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_loweragelimit`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_upperagelimit`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_upperagelimit`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_gender`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_gender`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_theme`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_theme`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_description`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_description`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_material`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_material`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_artno`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_artno`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_ean`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_ean`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_size`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_size`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_brand__id`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_brand__type`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_brand__id`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_brand__type`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_features`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_features`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_technologies`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_technologies`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_attributes`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_attributes`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_collection`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_collection`;

/*--NEXT--*/

ALTER TABLE `object_query_10` DROP INDEX `p_index_relatedProducts`;

/*--NEXT--*/

ALTER TABLE `object_store_10` DROP INDEX `p_index_relatedProducts`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_10` AS SELECT * FROM `object_query_10` JOIN `objects` ON `objects`.`o_id` = `object_query_10`.`oo_id`;

/*--NEXT--*/

