
CREATE TABLE IF NOT EXISTS `File` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `file` VARCHAR(254) NULL,
    /*!`type` ENUM('photo', 'file', 'video') NULL,*/
    `ext` VARCHAR(10) NULL,
    `site_id` INT NULL,
    `ip` VARCHAR(15) NULL,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`))
ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `Site` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `address1` VARCHAR(254) NOT NULL,
    `address2` VARCHAR(254) NULL DEFAULT NULL,
    `address3` VARCHAR(254) NULL DEFAULT NULL,
    `lat` DECIMAL(10,8) NOT NULL,
    `lng` DECIMAL(11,8) NOT NULL,
    `info` BLOB NULL DEFAULT NULL,
    `tellUs` BLOB NULL DEFAULT NULL,
    `tellUsInfo` BLOB NULL DEFAULT NULL,
    `ownership` VARCHAR(254) NULL DEFAULT NULL,
    `zoning` VARCHAR(254) NULL DEFAULT NULL,
    `planning` VARCHAR(254) NULL DEFAULT NULL,
    `size` VARCHAR(254) NULL DEFAULT NULL,
    `heritage` VARCHAR(254) NULL DEFAULT NULL,
    `derelict` VARCHAR(254) NULL DEFAULT NULL,
    `ip` VARCHAR(15) NULL DEFAULT NULL,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated` TIMESTAMP NOT NULL,
PRIMARY KEY (`id`))
ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `Comment` (
    `id` int(11) NOT NULL auto_increment,
    `site_id` int(11) NOT NULL,
    `question` varchar(254) collate utf8_unicode_ci NOT NULL,
    `message` blob NOT NULL,
    `name` varchar(254) collate utf8_unicode_ci NOT NULL,
    `ip` varchar(18) collate utf8_unicode_ci NOT NULL,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
