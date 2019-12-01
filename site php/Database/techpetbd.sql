-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema techpetbd
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema techpetbd
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `techpetbd` DEFAULT CHARACTER SET utf8 ;
USE `techpetbd` ;


-- -----------------------------------------------------
-- Table `techpetbd`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techpetbd`.`Usuario` (
  `Email` VARCHAR(100) Unique NOT NULL,
  `Nome` VARCHAR(45) NOT NULL,
  `Senha` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`Email`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `techpetbd`.`Vacinas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techpetbd`.`Vacinas` (
  `Codigo` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `Nome` VARCHAR(100) NOT NULL,
  `DTA_Aplicacao` DATE NOT NULL,
  `DTA_Vencimento` DATE NOT NULL,
  `Pet_Codigo` INT NOT NULL,
  PRIMARY KEY (`Codigo`),
  CONSTRAINT `fk_Vacinas_Pet1`
    FOREIGN KEY (`Pet_Codigo`)
    REFERENCES `techpetbd`.`Pet` (`Codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
  );
  



-- -----------------------------------------------------
-- Table `techpetbd`.`Pet`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techpetbd`.`Pet` (
  `Codigo` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `Animal` VARCHAR(45) NOT NULL,
  `Raca` VARCHAR(45) NOT NULL,
  `Nome` VARCHAR(45) NOT NULL,
  `Sexo` CHAR(1) NOT NULL,
  `Foto` VARCHAR(200) NOT NULL,
  `Usuario_email` CHAR(14) NOT NULL,
  PRIMARY KEY (`Codigo`),
  CONSTRAINT `fk_Pet_Usuario1`
    FOREIGN KEY (`Usuario_email`)
    REFERENCES `techpetbd`.`Usuario` (`email`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table `techpetbd`.`Produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techpetbd`.`Produtos` (
  `Codigo` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `Nome` VARCHAR(45) NOT NULL,
  `Valor` DOUBLE(9,2) NOT NULL,
  `Quantidade` DOUBLE(9,2) NOT NULL,
  `Descricao` varchar(120) NOT NULL,
  `Imagem` varchar(120) NOT NULL,
  PRIMARY KEY (`Codigo`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `techpetbd`.`Petshop`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techpetbd`.`Petshop` (
  `CNPJ` CHAR(19) NOT NULL,
  `Nome` VARCHAR(45) NOT NULL,
  `CEP` CHAR(10) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Endereco` VARCHAR(150) NOT NULL,
  `Foto` VARCHAR(200) NOT NULL,
  `Telefone` CHAR(15) NOT NULL,
  `Senha` varchar(45) NOT NULL,
  PRIMARY KEY (`CNPJ`)
 )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `techpetbd`.`Consulta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techpetbd`.`Servicos` (
  `Codigo` INT UNSIGNED AUTO_INCREMENT NOT NULL,
  `Tipo` VARCHAR(45) NOT NULL,
  `Data` DATE NOT NULL,
  `Hora` TIME NOT NULL,
  `Pet_Codigo` INT NOT NULL,
  `Petshop_CNPJ` CHAR(19) NOT NULL,
  PRIMARY KEY (`Codigo`),
  CONSTRAINT `fk_Consulta_Pet1`
    FOREIGN KEY (`Pet_Codigo`)
    REFERENCES `techpetbd`.`Pet` (`Codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Consulta_Petshop1`
    FOREIGN KEY (`Petshop_CNPJ`)
    REFERENCES `techpetbd`.`Petshop` (`CNPJ`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
    ;
    


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;