CREATE TABLE IF NOT EXISTS `object_collection_FilterTheme_1` (
		  `o_id` int(11) NOT NULL default '0',
		  `index` int(11) default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`index`,`fieldname`(255)),
          INDEX `o_id` (`o_id`),
          INDEX `index` (`index`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterTheme_1` DROP INDEX `p_index_label`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterTheme_1` DROP INDEX `p_index_preSelect`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterTheme_1` DROP INDEX `p_index_includeParentTheme`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterTheme_1` DROP INDEX `p_index_scriptPath`;

/*--NEXT--*/

ALTER TABLE `object_collection_FilterTheme_1` DROP INDEX `p_index_availableThemes`;

/*--NEXT--*/

