CREATE TABLE IF NOT EXISTS `object_collection_FilterMultiSelectFromMultiSelect_1` (
		  `o_id` int(11) NOT NULL default '0',
		  `index` int(11) default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`index`,`fieldname`(255)),
          INDEX `o_id` (`o_id`),
          INDEX `index` (`index`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelectFromMultiSelect_1` ADD COLUMN `label` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelectFromMultiSelect_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelectFromMultiSelect_1` ADD COLUMN `field__tenant` varchar(100) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelectFromMultiSelect_1` ADD COLUMN `field__field` varchar(200) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelectFromMultiSelect_1` ADD COLUMN `field__preSelect` text NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelectFromMultiSelect_1` DROP INDEX `p_index_field__tenant`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelectFromMultiSelect_1` DROP INDEX `p_index_field__field`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelectFromMultiSelect_1` DROP INDEX `p_index_field__preSelect`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelectFromMultiSelect_1` ADD COLUMN `scriptPath` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelectFromMultiSelect_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelectFromMultiSelect_1` ADD COLUMN `UseAndCondition` tinyint(1) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterMultiSelectFromMultiSelect_1` DROP INDEX `p_index_UseAndCondition`;

/*--NEXT--*/

