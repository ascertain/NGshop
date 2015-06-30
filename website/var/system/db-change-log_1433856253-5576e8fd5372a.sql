UPDATE `classes` SET `id` = 13, `name` = 'cFooter', `description` = '', `creationDate` = 1433854898, `modificationDate` = 1433856253, `userOwner` = 2, `userModification` = 2, `parentClass` = '', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 13);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_13` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '13',
			  `oo_className` varchar(255) default 'cFooter',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_13` ALTER COLUMN `oo_className` SET DEFAULT 'cFooter';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_13` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_13` (
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

ALTER TABLE `object_query_13` DROP INDEX `p_index_footerfield`;

/*--NEXT--*/

ALTER TABLE `object_store_13` DROP INDEX `p_index_footerfield`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_13` AS SELECT * FROM `object_query_13` JOIN `objects` ON `objects`.`o_id` = `object_query_13`.`oo_id`;

/*--NEXT--*/

