CREATE TABLE IF NOT EXISTS `plugin_ratingscomments_ratings` (
    		`id` INT NOT NULL AUTO_INCREMENT,
            `type` ENUM( 'object', 'asset', 'document' ) NOT NULL ,
    		`targetId` INT NOT NULL ,
    		`rating` INT NOT NULL ,
    		`comment` TEXT NULL ,
    		`title` VARCHAR(255) NULL ,
    		`name` VARCHAR(255) NULL ,
    		`metadata` TEXT NULL ,
            `classname` VARCHAR(255) NULL ,
    		`date` INT NOT NULL ,
    	    PRIMARY KEY  (`id`)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*--NEXT--*/

ALTER TABLE `plugin_ratingscomments_ratings` ADD INDEX (classname), ADD INDEX (targetId);

/*--NEXT--*/

