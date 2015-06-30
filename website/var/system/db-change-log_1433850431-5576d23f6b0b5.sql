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

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_field`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_secondfield`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age1#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age1#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age2#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age2#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age3#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age3#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age4#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age4#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age5#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age5#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age6#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age6#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age7#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age7#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age8#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age8#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age9#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age9#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age10#from` double NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` ADD COLUMN `ranges__age10#to` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age1#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age1#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age2#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age2#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age3#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age3#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age4#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age4#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age5#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age5#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age6#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age6#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age7#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age7#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age8#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age8#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age9#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age9#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age10#from`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_ranges__age10#to`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_preSelectFrom`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_preSelectTo`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP INDEX `p_index_unit`;

/*--NEXT--*/

ALTER TABLE `object_collection_Agefilter_1` DROP COLUMN `ranges__1#1`;

/*--NEXT--*/

