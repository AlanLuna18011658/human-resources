-- MySQL Script generated by MySQL Workbench
-- Sat Nov 25 18:28:27 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ashuredb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ashuredb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ashuredb` DEFAULT CHARACTER SET utf8 ;
USE `ashuredb` ;

-- -----------------------------------------------------
-- Table `ashuredb`.`empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ashuredb`.`empleado` (
  `idempleado` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido_paterno` VARCHAR(45) NOT NULL,
  `apellido_materno` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(10) NOT NULL,
  `genero` VARCHAR(45) NOT NULL,
  `calle` VARCHAR(50) NOT NULL,
  `ciudad` VARCHAR(50) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `cp` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(50) NOT NULL,
  `fecha_contratacion` VARCHAR(45) NOT NULL,
  `cargo` VARCHAR(45) NOT NULL,
  `departamento` VARCHAR(45) NOT NULL,
  `salario` VARCHAR(45) NOT NULL,
  `activo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idempleado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ashuredb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ashuredb`.`usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido_paterno` VARCHAR(45) NOT NULL,
  `apellido_materno` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(64) NOT NULL,
  `contraseña` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ashuredb`.`empleado_has_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ashuredb`.`empleado_has_usuario` (
  `empleado_idempleado` INT NOT NULL,
  `Usuario_idUsuario` INT NOT NULL,
  PRIMARY KEY (`empleado_idempleado`, `Usuario_idUsuario`),
  INDEX `fk_empleado_has_Usuario_Usuario1_idx` (`Usuario_idUsuario` ASC) VISIBLE,
  INDEX `fk_empleado_has_Usuario_empleado_idx` (`empleado_idempleado` ASC) VISIBLE,
  CONSTRAINT `fk_empleado_has_Usuario_empleado`
    FOREIGN KEY (`empleado_idempleado`)
    REFERENCES `ashuredb`.`empleado` (`idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_empleado_has_Usuario_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `ashuredb`.`usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ashuredb`.`salud`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ashuredb`.`salud` (
  `idsalud` INT NOT NULL AUTO_INCREMENT,
  `tipo_sangre` VARCHAR(45) NOT NULL,
  `alergias` VARCHAR(45) NOT NULL,
  `enf_cronicas` VARCHAR(45) NOT NULL,
  `historial_medico` VARCHAR(45) NOT NULL,
  `medico_cabecera` VARCHAR(45) NOT NULL,
  `contacto_medico` VARCHAR(45) NOT NULL,
  `ultima_revision_fecha` VARCHAR(45) NOT NULL,
  `empleado_idempleado` INT NOT NULL,
  PRIMARY KEY (`idsalud`, `empleado_idempleado`),
  INDEX `fk_salud_empleado1_idx` (`empleado_idempleado` ASC) VISIBLE,
  CONSTRAINT `fk_salud_empleado1`
    FOREIGN KEY (`empleado_idempleado`)
    REFERENCES `ashuredb`.`empleado` (`idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ashuredb`.`nomina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ashuredb`.`nomina` (
  `idnomina` INT NOT NULL AUTO_INCREMENT,
  `fecha_pago` VARCHAR(45) NOT NULL,
  `monto_bruto` VARCHAR(45) NOT NULL,
  `deducciones` VARCHAR(45) NOT NULL,
  `monto_neto` VARCHAR(45) NOT NULL,
  `empleado_idempleado` INT NOT NULL,
  PRIMARY KEY (`idnomina`),
  INDEX `fk_nomina_empleado1_idx` (`empleado_idempleado` ASC) VISIBLE,
  CONSTRAINT `fk_nomina_empleado1`
    FOREIGN KEY (`empleado_idempleado`)
    REFERENCES `ashuredb`.`empleado` (`idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ashuredb`.`contacto_emergencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ashuredb`.`contacto_emergencia` (
  `idcontacto_emergencia` INT NOT NULL AUTO_INCREMENT,
  `nombre_contacto` VARCHAR(45) NOT NULL,
  `relacion_contacto` VARCHAR(45) NOT NULL,
  `telefono_contacto` VARCHAR(45) NOT NULL,
  `correo_contacto` VARCHAR(45) NOT NULL,
  `empleado_idempleado` INT NOT NULL,
  PRIMARY KEY (`idcontacto_emergencia`),
  INDEX `fk_contacto_emergencia_empleado1_idx` (`empleado_idempleado` ASC) VISIBLE,
  CONSTRAINT `fk_contacto_emergencia_empleado1`
    FOREIGN KEY (`empleado_idempleado`)
    REFERENCES `ashuredb`.`empleado` (`idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ashuredb`.`retiro_jubilacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ashuredb`.`retiro_jubilacion` (
  `idjubilacion` INT NOT NULL AUTO_INCREMENT,
  `motivo_retiro` VARCHAR(45) NOT NULL,
  `tipo_retiro` VARCHAR(45) NOT NULL,
  `fecha_retiro` VARCHAR(45) NOT NULL,
  `empleado_idempleado` INT NOT NULL,
  PRIMARY KEY (`idjubilacion`),
  INDEX `fk_retiro_jubilacion_empleado1_idx` (`empleado_idempleado` ASC) VISIBLE,
  CONSTRAINT `fk_retiro_jubilacion_empleado1`
    FOREIGN KEY (`empleado_idempleado`)
    REFERENCES `ashuredb`.`empleado` (`idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ashuredb`.`rotacion_personal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ashuredb`.`rotacion_personal` (
  `idRotacion_personal` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  `motivo` VARCHAR(45) NOT NULL,
  `fecha` VARCHAR(45) NOT NULL,
  `empleado_idempleado` INT NOT NULL,
  PRIMARY KEY (`idRotacion_personal`),
  INDEX `fk_rotacion_personal_empleado1_idx` (`empleado_idempleado` ASC) VISIBLE,
  CONSTRAINT `fk_rotacion_personal_empleado1`
    FOREIGN KEY (`empleado_idempleado`)
    REFERENCES `ashuredb`.`empleado` (`idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ashuredb`.`permisos_vacaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ashuredb`.`permisos_vacaciones` (
  `idpermisos_vacaciones` INT NOT NULL AUTO_INCREMENT,
  `tipo_permiso` VARCHAR(45) NOT NULL,
  `fecha_inicio` VARCHAR(45) NOT NULL,
  `fecha_fin` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `motivo` VARCHAR(45) NOT NULL,
  `empleado_idempleado` INT NOT NULL,
  PRIMARY KEY (`idpermisos_vacaciones`),
  INDEX `fk_permisos_vacaciones_empleado1_idx` (`empleado_idempleado` ASC) VISIBLE,
  CONSTRAINT `fk_permisos_vacaciones_empleado1`
    FOREIGN KEY (`empleado_idempleado`)
    REFERENCES `ashuredb`.`empleado` (`idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ashuredb`.`vacantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ashuredb`.`vacantes` (
  `idvacantes` INT NOT NULL AUTO_INCREMENT,
  `vacante` VARCHAR(45) NOT NULL,
  `departamento` VARCHAR(45) NOT NULL,
  `fecha_cambio` VARCHAR(45) NOT NULL,
  `empleado_idempleado` INT NOT NULL,
  PRIMARY KEY (`idvacantes`),
  INDEX `fk_vacantes_empleado1_idx` (`empleado_idempleado` ASC) VISIBLE,
  CONSTRAINT `fk_vacantes_empleado1`
    FOREIGN KEY (`empleado_idempleado`)
    REFERENCES `ashuredb`.`empleado` (`idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ashuredb`.`turno_horario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ashuredb`.`turno_horario` (
  `idturno_horario` INT NOT NULL AUTO_INCREMENT,
  `nombre_turno` VARCHAR(45) NOT NULL,
  `hora_inicio` VARCHAR(45) NOT NULL,
  `hora_fin` VARCHAR(45) NOT NULL,
  `dias_semana` VARCHAR(45) NOT NULL,
  `empleado_idempleado` INT NOT NULL,
  PRIMARY KEY (`idturno_horario`),
  INDEX `fk_turno_horario_empleado1_idx` (`empleado_idempleado` ASC) VISIBLE,
  CONSTRAINT `fk_turno_horario_empleado1`
    FOREIGN KEY (`empleado_idempleado`)
    REFERENCES `ashuredb`.`empleado` (`idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ashuredb`.`asistencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ashuredb`.`asistencia` (
  `idasistencia` INT NOT NULL AUTO_INCREMENT,
  `fecha_hora_entrada` VARCHAR(45) NOT NULL,
  `fecha_hora_salida` VARCHAR(45) NOT NULL,
  `empleado_idempleado` INT NOT NULL,
  `turno_horario_idturno_horario` INT NOT NULL,
  PRIMARY KEY (`idasistencia`),
  INDEX `fk_asistencia_empleado1_idx` (`empleado_idempleado` ASC) VISIBLE,
  INDEX `fk_asistencia_turno_horario1_idx` (`turno_horario_idturno_horario` ASC) VISIBLE,
  CONSTRAINT `fk_asistencia_empleado1`
    FOREIGN KEY (`empleado_idempleado`)
    REFERENCES `ashuredb`.`empleado` (`idempleado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_asistencia_turno_horario1`
    FOREIGN KEY (`turno_horario_idturno_horario`)
    REFERENCES `ashuredb`.`turno_horario` (`idturno_horario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
