CREATE TABLE `plugin_pimtools_importreport` (
               id INT(20) AUTO_INCREMENT NOT NULL,
               productId INT(20) NOT NULL,
               importDate INT NOT NULL,
               action VARCHAR(20) NOT NULL,
               type VARCHAR(20) NULL DEFAULT NULL,
               state TINYINT(1),
               processedDate INT,
               userId INT(20),
              PRIMARY KEY (id)
            ) ENGINE = InnoDB ROW_FORMAT = DEFAULT;
;

/*--NEXT--*/

