CREATE TABLE IF NOT EXISTS `object_collection_FilterInputfield_1` (
		  `o_id` int(11) NOT NULL default '0',
		  `index` int(11) default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`index`,`fieldname`(255)),
          INDEX `o_id` (`o_id`),
          INDEX `index` (`index`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterInputfield_1` ADD COLUMN `label` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterInputfield_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterInputfield_1` ADD COLUMN `field` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterInputfield_1` DROP INDEX `p_index_field`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterInputfield_1` ADD COLUMN `preSelect` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterInputfield_1` DROP INDEX `p_index_preSelect`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterInputfield_1` ADD COLUMN `scriptPath` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterInputfield_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_collection_FilterMultiRelation_1` (
		  `o_id` int(11) NOT NULL default '0',
		  `index` int(11) default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`index`,`fieldname`(255)),
          INDEX `o_id` (`o_id`),
          INDEX `index` (`index`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiRelation_1` ADD COLUMN `label` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiRelation_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiRelation_1` ADD COLUMN `field__tenant` varchar(100) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiRelation_1` ADD COLUMN `field__field` varchar(200) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiRelation_1` ADD COLUMN `field__preSelect` text NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiRelation_1` DROP INDEX `p_index_field__tenant`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiRelation_1` DROP INDEX `p_index_field__field`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiRelation_1` DROP INDEX `p_index_field__preSelect`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiRelation_1` ADD COLUMN `useAndCondition` tinyint(1) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiRelation_1` DROP INDEX `p_index_useAndCondition`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiRelation_1` ADD COLUMN `scriptPath` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiRelation_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiRelation_1` DROP INDEX `p_index_availableRelations`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_collection_FilterMultiSelect_1` (
		  `o_id` int(11) NOT NULL default '0',
		  `index` int(11) default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`index`,`fieldname`(255)),
          INDEX `o_id` (`o_id`),
          INDEX `index` (`index`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelect_1` ADD COLUMN `label` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelect_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelect_1` ADD COLUMN `field__tenant` varchar(100) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelect_1` ADD COLUMN `field__field` varchar(200) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelect_1` ADD COLUMN `field__preSelect` text NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelect_1` DROP INDEX `p_index_field__tenant`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelect_1` DROP INDEX `p_index_field__field`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelect_1` DROP INDEX `p_index_field__preSelect`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelect_1` ADD COLUMN `scriptPath` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelect_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelect_1` ADD COLUMN `UseAndCondition` tinyint(1) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelect_1` DROP INDEX `p_index_UseAndCondition`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_collection_FilterNumberRange_1` (
		  `o_id` int(11) NOT NULL default '0',
		  `index` int(11) default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`index`,`fieldname`(255)),
          INDEX `o_id` (`o_id`),
          INDEX `index` (`index`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` ADD COLUMN `label` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` ADD COLUMN `field` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` DROP INDEX `p_index_field`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` ADD COLUMN `rangeFrom` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` DROP INDEX `p_index_rangeFrom`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` ADD COLUMN `rangeTo` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` DROP INDEX `p_index_rangeTo`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` ADD COLUMN `preSelectFrom` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` DROP INDEX `p_index_preSelectFrom`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` ADD COLUMN `preSelectTo` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` DROP INDEX `p_index_preSelectTo`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` ADD COLUMN `scriptPath` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRange_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_collection_FilterRelation_1` (
		  `o_id` int(11) NOT NULL default '0',
		  `index` int(11) default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`index`,`fieldname`(255)),
          INDEX `o_id` (`o_id`),
          INDEX `index` (`index`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterRelation_1` ADD COLUMN `label` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterRelation_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterRelation_1` ADD COLUMN `field__tenant` varchar(100) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterRelation_1` ADD COLUMN `field__field` varchar(200) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterRelation_1` ADD COLUMN `field__preSelect` text NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterRelation_1` DROP INDEX `p_index_field__tenant`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterRelation_1` DROP INDEX `p_index_field__field`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterRelation_1` DROP INDEX `p_index_field__preSelect`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterRelation_1` ADD COLUMN `scriptPath` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterRelation_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterRelation_1` DROP INDEX `p_index_availableRelations`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_collection_FilterSelect_1` (
		  `o_id` int(11) NOT NULL default '0',
		  `index` int(11) default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`index`,`fieldname`(255)),
          INDEX `o_id` (`o_id`),
          INDEX `index` (`index`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelect_1` ADD COLUMN `label` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelect_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelect_1` ADD COLUMN `field__tenant` varchar(100) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelect_1` ADD COLUMN `field__field` varchar(200) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelect_1` ADD COLUMN `field__preSelect` text NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelect_1` DROP INDEX `p_index_field__tenant`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelect_1` DROP INDEX `p_index_field__field`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelect_1` DROP INDEX `p_index_field__preSelect`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelect_1` ADD COLUMN `scriptPath` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelect_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_collection_FilterCategory_1` (
		  `o_id` int(11) NOT NULL default '0',
		  `index` int(11) default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`index`,`fieldname`(255)),
          INDEX `o_id` (`o_id`),
          INDEX `index` (`index`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterCategory_1` ADD COLUMN `label` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterCategory_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterCategory_1` DROP INDEX `p_index_preSelect`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterCategory_1` ADD COLUMN `includeParentCategories` tinyint(1) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterCategory_1` DROP INDEX `p_index_includeParentCategories`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterCategory_1` ADD COLUMN `scriptPath` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterCategory_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterCategory_1` DROP INDEX `p_index_availableCategories`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_collection_FilterSelectFromMultiSelect_1` (
		  `o_id` int(11) NOT NULL default '0',
		  `index` int(11) default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`index`,`fieldname`(255)),
          INDEX `o_id` (`o_id`),
          INDEX `index` (`index`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelectFromMultiSelect_1` ADD COLUMN `label` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelectFromMultiSelect_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelectFromMultiSelect_1` ADD COLUMN `field__tenant` varchar(100) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelectFromMultiSelect_1` ADD COLUMN `field__field` varchar(200) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelectFromMultiSelect_1` ADD COLUMN `field__preSelect` text NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelectFromMultiSelect_1` DROP INDEX `p_index_field__tenant`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelectFromMultiSelect_1` DROP INDEX `p_index_field__field`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelectFromMultiSelect_1` DROP INDEX `p_index_field__preSelect`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelectFromMultiSelect_1` ADD COLUMN `scriptPath` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterSelectFromMultiSelect_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

