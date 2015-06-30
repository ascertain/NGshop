CREATE TABLE IF NOT EXISTS `object_collection_Agefilter_1` (
		  `o_id` int(11) NOT NULL default '0',
		  `index` int(11) default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`index`,`fieldname`(255)),
          INDEX `o_id` (`o_id`),
          INDEX `index` (`index`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `label` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `field` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_field`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `secondfield` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_secondfield`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__1#1` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__1#1`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `preSelectFrom` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_preSelectFrom`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `preSelectTo` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_preSelectTo`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `scriptPath` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `unit` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_unit`;

/*--NEXT--*/

CREATE TABLE IF NOT EXISTS `object_collection_FilterNumberRangeSelection_1` (
		  `o_id` int(11) NOT NULL default '0',
		  `index` int(11) default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`index`,`fieldname`(255)),
          INDEX `o_id` (`o_id`),
          INDEX `index` (`index`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `label` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `field` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_field`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range1#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range1#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range2#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range2#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range3#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range3#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range4#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range4#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range1#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range1#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range2#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range2#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range3#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range3#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range4#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range4#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `preSelectFrom` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_preSelectFrom`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `preSelectTo` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_preSelectTo`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `scriptPath` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `unit` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_unit`;

/*--NEXT--*/

