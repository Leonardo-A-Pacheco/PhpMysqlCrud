create database 01overflow;

CREATE TABLE `01overflow`.`usuarios` (`id` INT NOT NULL AUTO_INCREMENT ,
 `name` CHAR(50) NOT NULL ,
 `senha` CHAR(255) NOT NULL ,
 `horaCadastro` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
 PRIMARY KEY (`id`),
 UNIQUE (`email`)) ENGINE = InnoDB;
 
 INSERT INTO `usuarios` (`id`, `name`, `senha`, `horaCadastro`) VALUES (NULL, 'teste', 'teste', current_timestamp());