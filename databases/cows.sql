DROP TABLE IF EXISTS `parent_child`;
DROP TABLE IF EXISTS `cows`;
DROP TABLE IF EXISTS `calf`;

CREATE TABLE `cows` (
    `tag` INT(3) NOT NULL UNIQUE,
    `name` VARCHAR(20),
    `breed` VARCHAR(20),
    PRIMARY KEY(`tag`)
);

CREATE TABLE `calf` (
    `tag` INT(3) NOT NULL UNIQUE,
    `name` VARCHAR(20),
    `breed` VARCHAR(20),
    `dob` DATE,
    PRIMARY KEY(`tag`)
);

CREATE TABLE `parent_child` (
    `cow_tag` INT(3) NOT NULL UNIQUE,
    `calf_tag` INT(3) NOT NULL UNIQUE,
    CONSTRAINT `cow_tag` FOREIGN KEY (`cow_tag`)
        REFERENCES `cows` (`tag`) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `calf_tag` FOREIGN KEY (`calf_tag`)
        REFERENCES `calf` (`tag`) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO `cows` VALUES
                       (123, 'Annie', 'Aberdeen Angus'),
                       (234, 'Betsy', 'Belgian Blue'),
                       (345, 'Hetty', 'Hereford'),
                       (456, 'Hannah', 'Holstein Friesian'),
                       (567, 'Jenny', 'Jersey');