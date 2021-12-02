
CREATE TABLE `users_tc`.`quote` ( `id` INT(1) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `material` VARCHAR(255) NOT NULL , `quantity` VARCHAR(255) NOT NULL , `date` DATE NOT NULL , `notes` TEXT NOT NULL , `created_at` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `users_tc`.`contact` ( `id` INT(1) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `number` VARCHAR(255) NOT NULL , `message` TEXT NOT NULL , `created_at` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `users_tc`.`apply` ( `id` INT(1) NOT NULL AUTO_INCREMENT , `model` VARCHAR(255) NOT NULL , `year` VARCHAR(255) NOT NULL , `miles` VARCHAR(255) NOT NULL , `created_at` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `users_tc`.`register` ( `id` INT(1) NOT NULL AUTO_INCREMENT , `username` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `confirm` VARCHAR(255) NOT NULL , `created_at` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `users_tc`. ( `id` INT(1) NOT NULL AUTO_INCREMENT , `username` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;