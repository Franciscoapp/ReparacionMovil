-- MySQL Script generated by MySQL Workbench
-- 05/30/15 15:10:45
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema YoLoArreglo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `YoLoArreglo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `YoLoArreglo` ;

-- -----------------------------------------------------
-- Table `YoLoArreglo`.`marcas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `YoLoArreglo`.`marcas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `YoLoArreglo`.`modelos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `YoLoArreglo`.`modelos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `marcas_id` INT NOT NULL,
  PRIMARY KEY (`id`, `marcas_id`),
  INDEX `fk_modelos_marcas_idx` (`marcas_id` ASC),
  CONSTRAINT `fk_modelos_marcas`
    FOREIGN KEY (`marcas_id`)
    REFERENCES `YoLoArreglo`.`marcas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `YoLoArreglo`.`tutorial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `YoLoArreglo`.`tutorial` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `descripcion` VARCHAR(500) NULL,
  `modelos_id` INT NOT NULL,
  PRIMARY KEY (`id`, `modelos_id`),
  INDEX `fk_tutorial_modelos1_idx` (`modelos_id` ASC),
  CONSTRAINT `fk_tutorial_modelos1`
    FOREIGN KEY (`modelos_id`)
    REFERENCES `YoLoArreglo`.`modelos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `YoLoArreglo`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `YoLoArreglo`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombreUsuario` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `YoLoArreglo`.`informacionContacto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `YoLoArreglo`.`informacionContacto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cuentaFacebook` VARCHAR(45) NULL,
  `cuentaTwitter` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `correo` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;