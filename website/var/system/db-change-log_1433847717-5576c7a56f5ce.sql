UPDATE `classes` SET `id` = 11, `name` = 'ProductCategory', `description` = '', `creationDate` = 1433843164, `modificationDate` = 1433847717, `userOwner` = 2, `userModification` = 2, `parentClass` = 'OnlineShop_Framework_AbstractCategory', `useTraits` = '', `allowInherit` = 1, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 11);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_11` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '11',
			  `oo_className` varchar(255) default 'ProductCategory',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_11` ALTER COLUMN `oo_className` SET DEFAULT 'ProductCategory';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_11` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_11` (
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

ALTER TABLE `object_query_11` DROP INDEX `p_index_name`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_name`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_seoname`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_seoname`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_filterdefinition__id`;

/*--NEXT--*/

ALTER TABLE `object_query_11` DROP INDEX `p_index_filterdefinition__type`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_filterdefinition__id`;

/*--NEXT--*/

ALTER TABLE `object_store_11` DROP INDEX `p_index_filterdefinition__type`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_11` AS SELECT * FROM `object_query_11` JOIN `objects` ON `objects`.`o_id` = `object_query_11`.`oo_id`;

/*--NEXT--*/

