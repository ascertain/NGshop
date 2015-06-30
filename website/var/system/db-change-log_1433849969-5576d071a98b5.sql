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

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_field`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range5#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range5#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range6#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range6#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range7#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range7#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range8#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range8#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range9#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range9#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range10#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` ADD COLUMN `ranges__range10#to` varchar(255) NULL;

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

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range5#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range5#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range6#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range6#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range7#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range7#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range8#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range8#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range9#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range9#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range10#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_ranges__range10#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_preSelectFrom`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_preSelectTo`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterNumberRangeSelection_1` DROP INDEX `p_index_unit`;

/*--NEXT--*/

