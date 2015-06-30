CREATE TABLE `plugin_onlineshop_cart` (
              `id` int(20) NOT NULL AUTO_INCREMENT,
              `userid` int(20) NOT NULL,
              `name` varchar(250) COLLATE utf8_bin DEFAULT NULL,
              `creationDateTimestamp` int(10) NOT NULL,
              `modificationDateTimestamp` int(10) NOT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*--NEXT--*/

CREATE TABLE `plugin_onlineshop_cartcheckoutdata` (
              `cartId` int(20) NOT NULL,
              `key` varchar(150) COLLATE utf8_bin NOT NULL,
              `data` longtext,
              PRIMARY KEY (`cartId`,`key`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*--NEXT--*/

CREATE TABLE `plugin_onlineshop_cartitem` (
              `productId` int(20) NOT NULL,
              `cartId` int(20) NOT NULL,
              `count` int(20) NOT NULL,
              `itemKey` varchar(100) COLLATE utf8_bin NOT NULL,
              `parentItemKey` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '0',
              `comment` LONGTEXT ASCII,
              `addedDateTimestamp` int(10) NOT NULL,
              `sortIndex` INT(10) UNSIGNED NULL DEFAULT '0',
              PRIMARY KEY (`itemKey`,`cartId`,`parentItemKey`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*--NEXT--*/

CREATE TABLE `plugins_onlineshop_vouchertoolkit_statistics` (
                `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
                `voucherSeriesId` BIGINT(20) NOT NULL,
                `date` DATE NOT NULL,
                PRIMARY KEY (`id`)
            )
            COLLATE='utf8_general_ci'
            ENGINE=InnoDB;

/*--NEXT--*/

CREATE TABLE `plugins_onlineshop_vouchertoolkit_tokens` (
                `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
                `voucherSeriesId` BIGINT(20) NULL DEFAULT NULL,
                `token` VARCHAR(250) NULL DEFAULT NULL COLLATE 'latin1_bin',
                `length` INT(11) NULL DEFAULT NULL,
                `type` VARCHAR(50) NULL DEFAULT NULL,
                `usages` BIGINT(20) NULL DEFAULT '0',
                `timestamp` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`),
                UNIQUE INDEX `token` (`token`)
            )
            COLLATE='utf8_general_ci'
            ENGINE=InnoDB;

/*--NEXT--*/

CREATE TABLE `plugins_onlineshop_vouchertoolkit_reservations` (
                `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
                `token` VARCHAR(250) NOT NULL,
                `cart_id` VARCHAR(250) NOT NULL,
                `timestamp` DATETIME NOT NULL,
                PRIMARY KEY (`id`),
                INDEX `token` (`token`)
            )
            COLLATE='utf8_general_ci'
            ENGINE=InnoDB
;

/*--NEXT--*/

INSERT INTO `classes` (`name`) VALUES ('FilterDefinition');

/*--NEXT--*/

UPDATE `classes` SET `id` = 1, `name` = 'FilterDefinition', `description` = '', `creationDate` = 1433835227, `modificationDate` = 1433835227, `userOwner` = '', `userModification` = 2, `parentClass` = 'OnlineShop_Framework_AbstractFilterDefinition', `useTraits` = '', `allowInherit` = 1, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 1);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_1` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '1',
			  `oo_className` varchar(255) default 'FilterDefinition',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_1` ALTER COLUMN `oo_className` SET DEFAULT 'FilterDefinition';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_1` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_1` (
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

ALTER TABLE `object_query_1` ADD COLUMN `pageLimit` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_1` ADD COLUMN `pageLimit` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_pageLimit`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_pageLimit`;

/*--NEXT--*/

ALTER TABLE `object_query_1` ADD COLUMN `ajaxReload` tinyint(1) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_1` ADD COLUMN `ajaxReload` tinyint(1) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_ajaxReload`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_ajaxReload`;

/*--NEXT--*/

ALTER TABLE `object_query_1` ADD COLUMN `limitOnFirstLoad` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_1` ADD COLUMN `limitOnFirstLoad` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_limitOnFirstLoad`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_limitOnFirstLoad`;

/*--NEXT--*/

ALTER TABLE `object_query_1` ADD COLUMN `orderByAsc` longtext NULL;

/*--NEXT--*/

ALTER TABLE `object_store_1` ADD COLUMN `orderByAsc` longtext NULL;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_orderByAsc`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_orderByAsc`;

/*--NEXT--*/

ALTER TABLE `object_query_1` ADD COLUMN `orderByDesc` longtext NULL;

/*--NEXT--*/

ALTER TABLE `object_store_1` ADD COLUMN `orderByDesc` longtext NULL;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_orderByDesc`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_orderByDesc`;

/*--NEXT--*/

ALTER TABLE `object_query_1` ADD COLUMN `defaultOrderByInheritance` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_1` ADD COLUMN `defaultOrderByInheritance` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_defaultOrderByInheritance`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_defaultOrderByInheritance`;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_defaultOrderBy`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_defaultOrderBy`;

/*--NEXT--*/

ALTER TABLE `object_query_1` ADD COLUMN `conditionsInheritance` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_1` ADD COLUMN `conditionsInheritance` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_conditionsInheritance`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_conditionsInheritance`;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_conditions`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_conditions`;

/*--NEXT--*/

ALTER TABLE `object_query_1` ADD COLUMN `filtersInheritance` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_1` ADD COLUMN `filtersInheritance` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_filtersInheritance`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_filtersInheritance`;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_filters`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_filters`;

/*--NEXT--*/

ALTER TABLE `object_query_1` ADD COLUMN `crossSellingCategory__id` int(11) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_1` ADD COLUMN `crossSellingCategory__type` enum('document','asset','object') NULL;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_crossSellingCategory__id`;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_crossSellingCategory__type`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_crossSellingCategory__id`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_crossSellingCategory__type`;

/*--NEXT--*/

ALTER TABLE `object_query_1` ADD COLUMN `similarityFieldsInheritance` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_1` ADD COLUMN `similarityFieldsInheritance` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_similarityFieldsInheritance`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_similarityFieldsInheritance`;

/*--NEXT--*/

ALTER TABLE `object_query_1` DROP INDEX `p_index_similarityFields`;

/*--NEXT--*/

ALTER TABLE `object_store_1` DROP INDEX `p_index_similarityFields`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_1` AS SELECT * FROM `object_query_1` JOIN `objects` ON `objects`.`o_id` = `object_query_1`.`oo_id`;

/*--NEXT--*/

INSERT INTO `classes` (`name`) VALUES ('OnlineShopOrderItem');

/*--NEXT--*/

UPDATE `classes` SET `id` = 2, `name` = 'OnlineShopOrderItem', `description` = '', `creationDate` = 1433835240, `modificationDate` = 1433835240, `userOwner` = '', `userModification` = 2, `parentClass` = 'OnlineShop_Framework_AbstractOrderItem', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 2);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_2` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '2',
			  `oo_className` varchar(255) default 'OnlineShopOrderItem',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_2` ALTER COLUMN `oo_className` SET DEFAULT 'OnlineShopOrderItem';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_2` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_2` (
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

ALTER TABLE `object_query_2` ADD COLUMN `orderState` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_2` ADD COLUMN `orderState` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_2` DROP INDEX `p_index_orderState`;

/*--NEXT--*/

ALTER TABLE `object_store_2` DROP INDEX `p_index_orderState`;

/*--NEXT--*/

ALTER TABLE `object_query_2` ADD COLUMN `product__id` int(11) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_2` ADD COLUMN `product__type` enum('document','asset','object') NULL;

/*--NEXT--*/

ALTER TABLE `object_query_2` DROP INDEX `p_index_product__id`;

/*--NEXT--*/

ALTER TABLE `object_query_2` DROP INDEX `p_index_product__type`;

/*--NEXT--*/

ALTER TABLE `object_store_2` DROP INDEX `p_index_product__id`;

/*--NEXT--*/

ALTER TABLE `object_store_2` DROP INDEX `p_index_product__type`;

/*--NEXT--*/

ALTER TABLE `object_query_2` ADD COLUMN `productNumber` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_2` ADD COLUMN `productNumber` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_2` DROP INDEX `p_index_productNumber`;

/*--NEXT--*/

ALTER TABLE `object_store_2` DROP INDEX `p_index_productNumber`;

/*--NEXT--*/

ALTER TABLE `object_query_2` ADD COLUMN `productName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_2` ADD COLUMN `productName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_2` DROP INDEX `p_index_productName`;

/*--NEXT--*/

ALTER TABLE `object_store_2` DROP INDEX `p_index_productName`;

/*--NEXT--*/

ALTER TABLE `object_query_2` ADD COLUMN `amount` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_2` ADD COLUMN `amount` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_2` DROP INDEX `p_index_amount`;

/*--NEXT--*/

ALTER TABLE `object_store_2` DROP INDEX `p_index_amount`;

/*--NEXT--*/

ALTER TABLE `object_query_2` ADD COLUMN `totalPrice` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_2` ADD COLUMN `totalPrice` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_2` DROP INDEX `p_index_totalPrice`;

/*--NEXT--*/

ALTER TABLE `object_store_2` DROP INDEX `p_index_totalPrice`;

/*--NEXT--*/

ALTER TABLE `object_query_2` ADD COLUMN `subItems` text NULL;

/*--NEXT--*/

ALTER TABLE `object_query_2` DROP INDEX `p_index_subItems`;

/*--NEXT--*/

ALTER TABLE `object_store_2` DROP INDEX `p_index_subItems`;

/*--NEXT--*/

ALTER TABLE `object_query_2` ADD COLUMN `comment` longtext NULL;

/*--NEXT--*/

ALTER TABLE `object_store_2` ADD COLUMN `comment` longtext NULL;

/*--NEXT--*/

ALTER TABLE `object_query_2` DROP INDEX `p_index_comment`;

/*--NEXT--*/

ALTER TABLE `object_store_2` DROP INDEX `p_index_comment`;

/*--NEXT--*/

ALTER TABLE `object_query_2` DROP INDEX `p_index_pricingRules`;

/*--NEXT--*/

ALTER TABLE `object_store_2` DROP INDEX `p_index_pricingRules`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_2` AS SELECT * FROM `object_query_2` JOIN `objects` ON `objects`.`o_id` = `object_query_2`.`oo_id`;

/*--NEXT--*/

INSERT INTO `classes` (`name`) VALUES ('OnlineShopVoucherSeries');

/*--NEXT--*/

UPDATE `classes` SET `id` = 3, `name` = 'OnlineShopVoucherSeries', `description` = '', `creationDate` = 1433835251, `modificationDate` = 1433835251, `userOwner` = '', `userModification` = 2, `parentClass` = 'OnlineShop_Framework_AbstractVoucherSeries', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 3);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_3` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '3',
			  `oo_className` varchar(255) default 'OnlineShopVoucherSeries',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_3` ALTER COLUMN `oo_className` SET DEFAULT 'OnlineShopVoucherSeries';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_3` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_3` (
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

ALTER TABLE `object_query_3` ADD COLUMN `name` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_3` ADD COLUMN `name` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_3` DROP INDEX `p_index_name`;

/*--NEXT--*/

ALTER TABLE `object_store_3` DROP INDEX `p_index_name`;

/*--NEXT--*/

ALTER TABLE `object_query_3` DROP INDEX `p_index_tokenSettings`;

/*--NEXT--*/

ALTER TABLE `object_store_3` DROP INDEX `p_index_tokenSettings`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_3` AS SELECT * FROM `object_query_3` JOIN `objects` ON `objects`.`o_id` = `object_query_3`.`oo_id`;

/*--NEXT--*/

INSERT INTO `classes` (`name`) VALUES ('OnlineShopVoucherToken');

/*--NEXT--*/

UPDATE `classes` SET `id` = 4, `name` = 'OnlineShopVoucherToken', `description` = '', `creationDate` = 1433835254, `modificationDate` = 1433835254, `userOwner` = '', `userModification` = 2, `parentClass` = '', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 4);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_4` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '4',
			  `oo_className` varchar(255) default 'OnlineShopVoucherToken',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_4` ALTER COLUMN `oo_className` SET DEFAULT 'OnlineShopVoucherToken';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_4` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_4` (
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

ALTER TABLE `object_query_4` ADD COLUMN `tokenId` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_4` ADD COLUMN `tokenId` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_tokenId`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_tokenId`;

/*--NEXT--*/

ALTER TABLE `object_query_4` ADD COLUMN `token` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_4` ADD COLUMN `token` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_token`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_token`;

/*--NEXT--*/

ALTER TABLE `object_query_4` ADD COLUMN `voucherSeries__id` int(11) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_4` ADD COLUMN `voucherSeries__type` enum('document','asset','object') NULL;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_voucherSeries__id`;

/*--NEXT--*/

ALTER TABLE `object_query_4` DROP INDEX `p_index_voucherSeries__type`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_voucherSeries__id`;

/*--NEXT--*/

ALTER TABLE `object_store_4` DROP INDEX `p_index_voucherSeries__type`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_4` AS SELECT * FROM `object_query_4` JOIN `objects` ON `objects`.`o_id` = `object_query_4`.`oo_id`;

/*--NEXT--*/

INSERT INTO `classes` (`name`) VALUES ('OnlineShopOrder');

/*--NEXT--*/

UPDATE `classes` SET `id` = 5, `name` = 'OnlineShopOrder', `description` = '', `creationDate` = 1433835260, `modificationDate` = 1433835260, `userOwner` = '', `userModification` = 2, `parentClass` = 'OnlineShop_Framework_AbstractOrder', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 5);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_5` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '5',
			  `oo_className` varchar(255) default 'OnlineShopOrder',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_5` ALTER COLUMN `oo_className` SET DEFAULT 'OnlineShopOrder';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_5` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_5` (
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

ALTER TABLE `object_query_5` ADD COLUMN `ordernumber` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `ordernumber` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_ordernumber`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_ordernumber`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `orderState` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `orderState` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_orderState`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_orderState`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `cartId` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `cartId` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_cartId`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_cartId`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `totalPrice` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `totalPrice` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_totalPrice`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_totalPrice`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `orderdate` bigint(20) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `orderdate` bigint(20) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_orderdate`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_orderdate`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `items` text NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_items`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_items`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_priceModifications`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_priceModifications`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `voucherTokens` text NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_voucherTokens`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_voucherTokens`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `currency` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `currency` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_currency`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_currency`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `comment` longtext NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `comment` longtext NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_comment`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_comment`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `customerOrderData` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `customerOrderData` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerOrderData`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerOrderData`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `customer__id` int(11) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `customer__type` enum('document','asset','object') NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customer__id`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customer__type`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customer__id`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customer__type`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `customerName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `customerName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerName`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerName`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `customerCompany` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `customerCompany` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerCompany`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerCompany`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `customerStreet` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `customerStreet` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerStreet`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerStreet`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `customerZip` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `customerZip` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerZip`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerZip`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `customerCity` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `customerCity` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerCity`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerCity`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `customerCountry` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `customerCountry` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerCountry`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerCountry`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `customerEmail` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `customerEmail` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerEmail`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerEmail`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `deliveryName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `deliveryName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryName`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryName`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `deliveryCompany` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `deliveryCompany` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryCompany`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryCompany`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `deliveryStreet` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `deliveryStreet` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryStreet`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryStreet`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `deliveryZip` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `deliveryZip` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryZip`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryZip`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `deliveryCity` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `deliveryCity` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryCity`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryCity`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `deliveryCountry` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `deliveryCountry` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryCountry`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryCountry`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_paymentProvider`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_paymentProvider`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_paymentInfo`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_paymentInfo`;

/*--NEXT--*/

ALTER TABLE `object_query_5` ADD COLUMN `paymentReference` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_5` ADD COLUMN `paymentReference` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_paymentReference`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_paymentReference`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_5` AS SELECT * FROM `object_query_5` JOIN `objects` ON `objects`.`o_id` = `object_query_5`.`oo_id`;

/*--NEXT--*/

INSERT INTO `classes` (`name`) VALUES ('OfferToolOfferItem');

/*--NEXT--*/

UPDATE `classes` SET `id` = 6, `name` = 'OfferToolOfferItem', `description` = '', `creationDate` = 1433835291, `modificationDate` = 1433835291, `userOwner` = '', `userModification` = 2, `parentClass` = 'OnlineShop_OfferTool_AbstractOfferItem', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 6);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_6` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '6',
			  `oo_className` varchar(255) default 'OfferToolOfferItem',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_6` ALTER COLUMN `oo_className` SET DEFAULT 'OfferToolOfferItem';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_6` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_6` (
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

ALTER TABLE `object_query_6` ADD COLUMN `product__id` int(11) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_6` ADD COLUMN `product__type` enum('document','asset','object') NULL;

/*--NEXT--*/

ALTER TABLE `object_query_6` DROP INDEX `p_index_product__id`;

/*--NEXT--*/

ALTER TABLE `object_query_6` DROP INDEX `p_index_product__type`;

/*--NEXT--*/

ALTER TABLE `object_store_6` DROP INDEX `p_index_product__id`;

/*--NEXT--*/

ALTER TABLE `object_store_6` DROP INDEX `p_index_product__type`;

/*--NEXT--*/

ALTER TABLE `object_query_6` ADD COLUMN `productNumber` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_6` ADD COLUMN `productNumber` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_6` DROP INDEX `p_index_productNumber`;

/*--NEXT--*/

ALTER TABLE `object_store_6` DROP INDEX `p_index_productNumber`;

/*--NEXT--*/

ALTER TABLE `object_query_6` ADD COLUMN `productName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_6` ADD COLUMN `productName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_6` DROP INDEX `p_index_productName`;

/*--NEXT--*/

ALTER TABLE `object_store_6` DROP INDEX `p_index_productName`;

/*--NEXT--*/

ALTER TABLE `object_query_6` ADD COLUMN `amount` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_6` ADD COLUMN `amount` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_6` DROP INDEX `p_index_amount`;

/*--NEXT--*/

ALTER TABLE `object_store_6` DROP INDEX `p_index_amount`;

/*--NEXT--*/

ALTER TABLE `object_query_6` ADD COLUMN `originalTotalPrice` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_6` ADD COLUMN `originalTotalPrice` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_6` DROP INDEX `p_index_originalTotalPrice`;

/*--NEXT--*/

ALTER TABLE `object_store_6` DROP INDEX `p_index_originalTotalPrice`;

/*--NEXT--*/

ALTER TABLE `object_query_6` ADD COLUMN `discount` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_6` ADD COLUMN `discount` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_6` DROP INDEX `p_index_discount`;

/*--NEXT--*/

ALTER TABLE `object_store_6` DROP INDEX `p_index_discount`;

/*--NEXT--*/

ALTER TABLE `object_query_6` ADD COLUMN `DiscountType` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_6` ADD COLUMN `DiscountType` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_6` DROP INDEX `p_index_DiscountType`;

/*--NEXT--*/

ALTER TABLE `object_store_6` DROP INDEX `p_index_DiscountType`;

/*--NEXT--*/

ALTER TABLE `object_query_6` ADD COLUMN `finalTotalPrice` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_6` ADD COLUMN `finalTotalPrice` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_6` DROP INDEX `p_index_finalTotalPrice`;

/*--NEXT--*/

ALTER TABLE `object_store_6` DROP INDEX `p_index_finalTotalPrice`;

/*--NEXT--*/

ALTER TABLE `object_query_6` ADD COLUMN `subItems` text NULL;

/*--NEXT--*/

ALTER TABLE `object_query_6` DROP INDEX `p_index_subItems`;

/*--NEXT--*/

ALTER TABLE `object_store_6` DROP INDEX `p_index_subItems`;

/*--NEXT--*/

ALTER TABLE `object_query_6` ADD COLUMN `comment` longtext NULL;

/*--NEXT--*/

ALTER TABLE `object_store_6` ADD COLUMN `comment` longtext NULL;

/*--NEXT--*/

ALTER TABLE `object_query_6` DROP INDEX `p_index_comment`;

/*--NEXT--*/

ALTER TABLE `object_store_6` DROP INDEX `p_index_comment`;

/*--NEXT--*/

ALTER TABLE `object_query_6` ADD COLUMN `cartItemKey` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_6` ADD COLUMN `cartItemKey` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_6` DROP INDEX `p_index_cartItemKey`;

/*--NEXT--*/

ALTER TABLE `object_store_6` DROP INDEX `p_index_cartItemKey`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_6` AS SELECT * FROM `object_query_6` JOIN `objects` ON `objects`.`o_id` = `object_query_6`.`oo_id`;

/*--NEXT--*/

INSERT INTO `classes` (`name`) VALUES ('OfferToolOffer');

/*--NEXT--*/

UPDATE `classes` SET `id` = 7, `name` = 'OfferToolOffer', `description` = '', `creationDate` = 1433835304, `modificationDate` = 1433835304, `userOwner` = '', `userModification` = 2, `parentClass` = 'OnlineShop_OfferTool_AbstractOffer', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 7);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_7` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '7',
			  `oo_className` varchar(255) default 'OfferToolOffer',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_7` ALTER COLUMN `oo_className` SET DEFAULT 'OfferToolOffer';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_7` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_7` (
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

ALTER TABLE `object_query_7` ADD COLUMN `offernumber` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` ADD COLUMN `offernumber` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_offernumber`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_offernumber`;

/*--NEXT--*/

ALTER TABLE `object_query_7` ADD COLUMN `dateCreated` bigint(20) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` ADD COLUMN `dateCreated` bigint(20) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_dateCreated`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_dateCreated`;

/*--NEXT--*/

ALTER TABLE `object_query_7` ADD COLUMN `dateValidUntil` bigint(20) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` ADD COLUMN `dateValidUntil` bigint(20) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_dateValidUntil`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_dateValidUntil`;

/*--NEXT--*/

ALTER TABLE `object_query_7` ADD COLUMN `totalPriceBeforeDiscount` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` ADD COLUMN `totalPriceBeforeDiscount` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_totalPriceBeforeDiscount`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_totalPriceBeforeDiscount`;

/*--NEXT--*/

ALTER TABLE `object_query_7` ADD COLUMN `totalPrice` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` ADD COLUMN `totalPrice` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_totalPrice`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_totalPrice`;

/*--NEXT--*/

ALTER TABLE `object_query_7` ADD COLUMN `discount` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` ADD COLUMN `discount` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_discount`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_discount`;

/*--NEXT--*/

ALTER TABLE `object_query_7` ADD COLUMN `discountType` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` ADD COLUMN `discountType` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_discountType`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_discountType`;

/*--NEXT--*/

ALTER TABLE `object_query_7` ADD COLUMN `items` text NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_items`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_items`;

/*--NEXT--*/

ALTER TABLE `object_query_7` ADD COLUMN `customItems` text NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_customItems`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_customItems`;

/*--NEXT--*/

ALTER TABLE `object_query_7` ADD COLUMN `cartId` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_7` ADD COLUMN `cartId` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_7` DROP INDEX `p_index_cartId`;

/*--NEXT--*/

ALTER TABLE `object_store_7` DROP INDEX `p_index_cartId`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_7` AS SELECT * FROM `object_query_7` JOIN `objects` ON `objects`.`o_id` = `object_query_7`.`oo_id`;

/*--NEXT--*/

INSERT INTO `classes` (`name`) VALUES ('OfferToolCustomProduct');

/*--NEXT--*/

UPDATE `classes` SET `id` = 8, `name` = 'OfferToolCustomProduct', `description` = '', `creationDate` = 1433835317, `modificationDate` = 1433835317, `userOwner` = '', `userModification` = 2, `parentClass` = 'OnlineShop_OfferTool_AbstractOfferToolProduct', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 8);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_8` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '8',
			  `oo_className` varchar(255) default 'OfferToolCustomProduct',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_8` ALTER COLUMN `oo_className` SET DEFAULT 'OfferToolCustomProduct';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_8` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_8` (
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

ALTER TABLE `object_query_8` ADD COLUMN `OSproductNumber` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_8` ADD COLUMN `OSproductNumber` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_OSproductNumber`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_OSproductNumber`;

/*--NEXT--*/

ALTER TABLE `object_query_8` ADD COLUMN `OSName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_8` ADD COLUMN `OSName` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_OSName`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_OSName`;

/*--NEXT--*/

ALTER TABLE `object_query_8` ADD COLUMN `price` double NULL;

/*--NEXT--*/

ALTER TABLE `object_store_8` ADD COLUMN `price` double NULL;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_price`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_price`;

/*--NEXT--*/

ALTER TABLE `object_query_8` ADD COLUMN `productGroup` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_store_8` ADD COLUMN `productGroup` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_query_8` DROP INDEX `p_index_productGroup`;

/*--NEXT--*/

ALTER TABLE `object_store_8` DROP INDEX `p_index_productGroup`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_8` AS SELECT * FROM `object_query_8` JOIN `objects` ON `objects`.`o_id` = `object_query_8`.`oo_id`;

/*--NEXT--*/

UPDATE `classes` SET `id` = 5, `name` = 'OnlineShopOrder', `description` = '', `creationDate` = 1433835260, `modificationDate` = 1433835322, `userOwner` = 0, `userModification` = 2, `parentClass` = 'OnlineShop_Framework_AbstractOrder', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 5);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_5` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '5',
			  `oo_className` varchar(255) default 'OnlineShopOrder',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_5` ALTER COLUMN `oo_className` SET DEFAULT 'OnlineShopOrder';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_5` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_5` (
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

ALTER TABLE `object_query_5` DROP INDEX `p_index_ordernumber`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_ordernumber`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_orderState`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_orderState`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_cartId`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_cartId`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_totalPrice`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_totalPrice`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_orderdate`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_orderdate`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_items`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_items`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_priceModifications`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_priceModifications`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_voucherTokens`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_voucherTokens`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_currency`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_currency`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_comment`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_comment`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerOrderData`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerOrderData`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customer__id`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customer__type`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customer__id`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customer__type`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerName`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerName`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerCompany`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerCompany`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerStreet`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerStreet`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerZip`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerZip`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerCity`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerCity`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerCountry`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerCountry`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerEmail`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerEmail`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryName`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryName`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryCompany`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryCompany`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryStreet`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryStreet`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryZip`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryZip`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryCity`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryCity`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryCountry`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryCountry`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_paymentProvider`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_paymentProvider`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_paymentInfo`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_paymentInfo`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_paymentReference`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_paymentReference`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_5` AS SELECT * FROM `object_query_5` JOIN `objects` ON `objects`.`o_id` = `object_query_5`.`oo_id`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_brick_store_PaymentProviderDatatrans_5` (
		  `o_id` int(11) NOT NULL default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`fieldname`),
          INDEX `o_id` (`o_id`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_brick_query_PaymentProviderDatatrans_5` (
		  `o_id` int(11) NOT NULL default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`fieldname`),
          INDEX `o_id` (`o_id`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` ADD COLUMN `auth_aliasCC` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` ADD COLUMN `auth_aliasCC` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_aliasCC`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_aliasCC`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` ADD COLUMN `auth_expm` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` ADD COLUMN `auth_expm` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_expm`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_expm`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` ADD COLUMN `auth_expy` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` ADD COLUMN `auth_expy` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_expy`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_expy`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` ADD COLUMN `auth_reqtype` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` ADD COLUMN `auth_reqtype` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_reqtype`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_reqtype`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` ADD COLUMN `auth_uppTransactionId` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` ADD COLUMN `auth_uppTransactionId` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_uppTransactionId`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_uppTransactionId`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` ADD COLUMN `auth_amount` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` ADD COLUMN `auth_amount` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_amount`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_amount`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` ADD COLUMN `auth_currency` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` ADD COLUMN `auth_currency` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_currency`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_currency`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` ADD COLUMN `auth_refno` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` ADD COLUMN `auth_refno` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_refno`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderDatatrans_5` DROP INDEX `p_index_auth_refno`;

/*--NEXT--*/

UPDATE `classes` SET `id` = 5, `name` = 'OnlineShopOrder', `description` = '', `creationDate` = 1433835260, `modificationDate` = 1433835333, `userOwner` = 0, `userModification` = 2, `parentClass` = 'OnlineShop_Framework_AbstractOrder', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 5);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_5` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '5',
			  `oo_className` varchar(255) default 'OnlineShopOrder',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_5` ALTER COLUMN `oo_className` SET DEFAULT 'OnlineShopOrder';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_5` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_5` (
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

ALTER TABLE `object_query_5` DROP INDEX `p_index_ordernumber`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_ordernumber`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_orderState`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_orderState`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_cartId`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_cartId`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_totalPrice`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_totalPrice`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_orderdate`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_orderdate`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_items`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_items`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_priceModifications`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_priceModifications`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_voucherTokens`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_voucherTokens`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_currency`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_currency`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_comment`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_comment`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerOrderData`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerOrderData`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customer__id`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customer__type`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customer__id`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customer__type`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerName`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerName`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerCompany`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerCompany`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerStreet`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerStreet`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerZip`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerZip`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerCity`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerCity`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerCountry`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerCountry`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerEmail`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerEmail`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryName`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryName`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryCompany`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryCompany`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryStreet`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryStreet`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryZip`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryZip`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryCity`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryCity`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryCountry`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryCountry`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_paymentProvider`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_paymentProvider`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_paymentInfo`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_paymentInfo`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_paymentReference`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_paymentReference`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_5` AS SELECT * FROM `object_query_5` JOIN `objects` ON `objects`.`o_id` = `object_query_5`.`oo_id`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_brick_store_PaymentProviderPayPal_5` (
		  `o_id` int(11) NOT NULL default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`fieldname`),
          INDEX `o_id` (`o_id`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_brick_query_PaymentProviderPayPal_5` (
		  `o_id` int(11) NOT NULL default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`fieldname`),
          INDEX `o_id` (`o_id`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderPayPal_5` ADD COLUMN `auth_token` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderPayPal_5` ADD COLUMN `auth_token` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderPayPal_5` DROP INDEX `p_index_auth_token`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderPayPal_5` DROP INDEX `p_index_auth_token`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderPayPal_5` ADD COLUMN `auth_PayerID` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderPayPal_5` ADD COLUMN `auth_PayerID` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderPayPal_5` DROP INDEX `p_index_auth_PayerID`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderPayPal_5` DROP INDEX `p_index_auth_PayerID`;

/*--NEXT--*/

UPDATE `classes` SET `id` = 5, `name` = 'OnlineShopOrder', `description` = '', `creationDate` = 1433835260, `modificationDate` = 1433835337, `userOwner` = 0, `userModification` = 2, `parentClass` = 'OnlineShop_Framework_AbstractOrder', `useTraits` = '', `allowInherit` = 0, `allowVariants` = 0, `showVariants` = 0, `icon` = '', `previewUrl` = '', `propertyVisibility` = 'a:2:{s:4:\"grid\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}s:6:\"search\";a:5:{s:2:\"id\";b:1;s:4:\"path\";b:1;s:9:\"published\";b:1;s:16:\"modificationDate\";b:1;s:12:\"creationDate\";b:1;}}' WHERE (id = 5);

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_query_5` (
			  `oo_id` int(11) NOT NULL default '0',
			  `oo_classId` int(11) default '5',
			  `oo_className` varchar(255) default 'OnlineShopOrder',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_query_5` ALTER COLUMN `oo_className` SET DEFAULT 'OnlineShopOrder';

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_store_5` (
			  `oo_id` int(11) NOT NULL default '0',
			  PRIMARY KEY  (`oo_id`)
			) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_relations_5` (
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

ALTER TABLE `object_query_5` DROP INDEX `p_index_ordernumber`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_ordernumber`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_orderState`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_orderState`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_cartId`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_cartId`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_totalPrice`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_totalPrice`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_orderdate`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_orderdate`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_items`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_items`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_priceModifications`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_priceModifications`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_voucherTokens`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_voucherTokens`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_currency`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_currency`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_comment`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_comment`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerOrderData`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerOrderData`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customer__id`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customer__type`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customer__id`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customer__type`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerName`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerName`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerCompany`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerCompany`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerStreet`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerStreet`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerZip`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerZip`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerCity`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerCity`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerCountry`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerCountry`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_customerEmail`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_customerEmail`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryName`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryName`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryCompany`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryCompany`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryStreet`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryStreet`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryZip`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryZip`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryCity`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryCity`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_deliveryCountry`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_deliveryCountry`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_paymentProvider`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_paymentProvider`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_paymentInfo`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_paymentInfo`;

/*--NEXT--*/

ALTER TABLE `object_query_5` DROP INDEX `p_index_paymentReference`;

/*--NEXT--*/

ALTER TABLE `object_store_5` DROP INDEX `p_index_paymentReference`;

/*--NEXT--*/

CREATE OR REPLACE VIEW `object_5` AS SELECT * FROM `object_query_5` JOIN `objects` ON `objects`.`o_id` = `object_query_5`.`oo_id`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_brick_store_PaymentProviderQpay_5` (
		  `o_id` int(11) NOT NULL default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`fieldname`),
          INDEX `o_id` (`o_id`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_brick_query_PaymentProviderQpay_5` (
		  `o_id` int(11) NOT NULL default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`fieldname`),
          INDEX `o_id` (`o_id`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderQpay_5` ADD COLUMN `auth_orderNumber` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderQpay_5` ADD COLUMN `auth_orderNumber` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderQpay_5` DROP INDEX `p_index_auth_orderNumber`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderQpay_5` DROP INDEX `p_index_auth_orderNumber`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderQpay_5` ADD COLUMN `auth_language` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderQpay_5` ADD COLUMN `auth_language` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderQpay_5` DROP INDEX `p_index_auth_language`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderQpay_5` DROP INDEX `p_index_auth_language`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderQpay_5` ADD COLUMN `auth_amount` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderQpay_5` ADD COLUMN `auth_amount` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderQpay_5` DROP INDEX `p_index_auth_amount`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderQpay_5` DROP INDEX `p_index_auth_amount`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderQpay_5` ADD COLUMN `auth_currency` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderQpay_5` ADD COLUMN `auth_currency` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_brick_store_PaymentProviderQpay_5` DROP INDEX `p_index_auth_currency`;

/*--NEXT--*/

ALTER TABLE `object_brick_query_PaymentProviderQpay_5` DROP INDEX `p_index_auth_currency`;

/*--NEXT--*/


            CREATE TABLE IF NOT EXISTS `plugin_onlineshop_pricing_rule` (
            `id` INT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(50) NULL DEFAULT NULL,
            `label` TEXT NULL,
            `description` TEXT NULL,
            `behavior` ENUM('additiv','stopExecute') NULL DEFAULT NULL,
            `active` TINYINT(1) UNSIGNED NULL DEFAULT NULL,
            `prio` TINYINT(3) UNSIGNED NOT NULL,
            `condition` TEXT NOT NULL COMMENT 'configuration der condition',
            `actions` TEXT NOT NULL COMMENT 'configuration der action',
            PRIMARY KEY (`id`),
            UNIQUE INDEX `name` (`name`),
            INDEX `active` (`active`)
        )
        ENGINE=InnoDB
        AUTO_INCREMENT=0;
;

/*--NEXT--*/

INSERT INTO `users_permission_definitions` (`key`) VALUES ('plugin_onlineshop_pricing_rules');

/*--NEXT--*/

