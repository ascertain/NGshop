CREATE TABLE IF NOT EXISTS `object_collection_Image_12` (
		  `o_id` int(11) NOT NULL default '0',
		  `index` int(11) default '0',
          `fieldname` varchar(255) default NULL,
          PRIMARY KEY (`o_id`,`index`,`fieldname`(255)),
          INDEX `o_id` (`o_id`),
          INDEX `index` (`index`),
          INDEX `fieldname` (`fieldname`)
		) DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `object_collection_Image_12` ADD COLUMN `text` varchar(255) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Image_12` DROP INDEX `p_index_text`;

/*--NEXT--*/

ALTER TABLE `object_collection_Image_12` ADD COLUMN `image` int(11) NULL;

/*--NEXT--*/

ALTER TABLE `object_collection_Image_12` DROP INDEX `p_index_image`;

/*--NEXT--*/

