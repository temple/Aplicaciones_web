-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema aplicaciones_web
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `aplicaciones_web` ;

-- -----------------------------------------------------
-- Schema aplicaciones_web
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `aplicaciones_web` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `aplicaciones_web` ;

-- -----------------------------------------------------
-- Table `aplicaciones_web`.`certificados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aplicaciones_web`.`certificados` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `identificacion` VARCHAR(100) NOT NULL,
  `codigo` CHAR(8) NOT NULL,
  `titulo` CHAR(50) NOT NULL,
  `nivel` TINYINT(1) NOT NULL DEFAULT 3,
  `horas` SMALLINT(3) ZEROFILL NOT NULL,
  `familia` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `identificacion_UNIQUE` (`identificacion` ASC) ,
  UNIQUE INDEX `codigo_UNIQUE` (`codigo` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aplicaciones_web`.`modulos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aplicaciones_web`.`modulos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `identificacion` VARCHAR(100) NOT NULL,
  `codigo` CHAR(8) NOT NULL,
  `titulo` CHAR(50) NOT NULL,
  `horas` SMALLINT(3) ZEROFILL NOT NULL,
  `resumen` TEXT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `identificacion_UNIQUE` (`identificacion` ASC) ,
  UNIQUE INDEX `codigo_UNIQUE` (`codigo` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aplicaciones_web`.`modulos_en_certificados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aplicaciones_web`.`modulos_en_certificados` (
  `id_certificado` INT NOT NULL,
  `id_modulo` INT NOT NULL,
  PRIMARY KEY (`id_certificado`, `id_modulo`),
  INDEX `fk_modulos_en_certificados_certificados_copy11_idx` (`id_modulo` ASC) ,
  CONSTRAINT `fk_modulos_en_certificados_certificados`
    FOREIGN KEY (`id_certificado`)
    REFERENCES `aplicaciones_web`.`certificados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_modulos_en_certificados_certificados_copy11`
    FOREIGN KEY (`id_modulo`)
    REFERENCES `aplicaciones_web`.`modulos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aplicaciones_web`.`unidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `aplicaciones_web`.`unidades` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `identificacion` VARCHAR(100) NOT NULL,
  `codigo` CHAR(8) NOT NULL,
  `titulo` CHAR(50) NOT NULL,
  `horas` SMALLINT(3) ZEROFILL NOT NULL,
  `resumen` TEXT NOT NULL,
  `id_modulo` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `identificacion_UNIQUE` (`identificacion` ASC) ,
  UNIQUE INDEX `codigo_UNIQUE` (`codigo` ASC) ,
  INDEX `fk_unidades_modulos1_idx` (`id_modulo` ASC) ,
  CONSTRAINT `fk_unidades_modulos1`
    FOREIGN KEY (`id_modulo`)
    REFERENCES `aplicaciones_web`.`modulos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

DROP USER IF EXISTS 'app';

CREATE USER 'app' IDENTIFIED BY 'secret';

GRANT ALL ON `aplicaciones_web`.* TO 'app';
GRANT SELECT, INSERT, TRIGGER ON TABLE `aplicaciones_web`.* TO 'app';
GRANT SELECT, INSERT, TRIGGER, UPDATE, DELETE ON TABLE `aplicaciones_web`.* TO 'app';
GRANT SELECT ON TABLE `aplicaciones_web`.* TO 'app';

DROP USER IF EXISTS 'app'@'localhost';

CREATE USER 'app'@'localhost' IDENTIFIED BY 'secret';

GRANT ALL ON `aplicaciones_web`.* TO 'app'@'localhost';
GRANT SELECT, INSERT, TRIGGER ON TABLE `aplicaciones_web`.* TO 'app'@'localhost';
GRANT SELECT, INSERT, TRIGGER, UPDATE, DELETE ON TABLE `aplicaciones_web`.* TO 'app'@'localhost';
GRANT SELECT ON TABLE `aplicaciones_web`.* TO 'app'@'localhost';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `aplicaciones_web`.`certificados`
-- -----------------------------------------------------
START TRANSACTION;
USE `aplicaciones_web`;
INSERT INTO `aplicaciones_web`.`certificados` (`id`, `identificacion`, `codigo`, `titulo`, `nivel`, `horas`, `familia`) VALUES (1, 'Confección y publicación de páginas web', 'IFCD0110', 'Páginas Web', 2, 560, 'Informática y comunicaciones');
INSERT INTO `aplicaciones_web`.`certificados` (`id`, `identificacion`, `codigo`, `titulo`, `nivel`, `horas`, `familia`) VALUES (2, 'Desarrollo de aplicaciones con tecnologías web', 'IFCD0210', 'Desarrollo Aplicaciones Web', 3, 590, 'Informática y comunicaciones');

COMMIT;


-- -----------------------------------------------------
-- Data for table `aplicaciones_web`.`modulos`
-- -----------------------------------------------------
START TRANSACTION;
USE `aplicaciones_web`;
INSERT INTO `aplicaciones_web`.`modulos` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`) VALUES (1, 'Programación web en entorno cliente', 'MF0491', 'Programación Frontend', 180, 'Desarrollo de documentos en HTML5 y CSS3 con interactividad vía Javascript');
INSERT INTO `aplicaciones_web`.`modulos` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`) VALUES (2, 'Programación web en entorno servidor', 'MF0492', 'Programación Backend', 240, 'Desarrollo de aplicaciones con bases de datos y REST');
INSERT INTO `aplicaciones_web`.`modulos` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`) VALUES (3, 'Implantación de aplicaciones web en entornos intranet, internet y extranet', 'MF0493', 'Despliegue de aplicaciones', 90, 'Despliegue y test de aplicaciones con control de versiones y suites de unit testing');
INSERT INTO `aplicaciones_web`.`modulos` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`) VALUES (4, 'Construcción de páginas web', 'MF0950', 'HTML5 y CSS3', 210, 'Creación de documentos HTML5 con estilos en CSS3');
INSERT INTO `aplicaciones_web`.`modulos` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`) VALUES (5, 'Integración de componentes software en páginas web', 'MF0951', 'Javascript', 180, 'Interactividad mediante Javascript');
INSERT INTO `aplicaciones_web`.`modulos` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`) VALUES (6, 'Publicación de páginas web', 'MF0952', 'Publicación de webs', 90, 'Publicación de contenidos vía FTP');

COMMIT;


-- -----------------------------------------------------
-- Data for table `aplicaciones_web`.`modulos_en_certificados`
-- -----------------------------------------------------
START TRANSACTION;
USE `aplicaciones_web`;
INSERT INTO `aplicaciones_web`.`modulos_en_certificados` (`id_certificado`, `id_modulo`) VALUES (1, 4);
INSERT INTO `aplicaciones_web`.`modulos_en_certificados` (`id_certificado`, `id_modulo`) VALUES (1, 5);
INSERT INTO `aplicaciones_web`.`modulos_en_certificados` (`id_certificado`, `id_modulo`) VALUES (1, 6);
INSERT INTO `aplicaciones_web`.`modulos_en_certificados` (`id_certificado`, `id_modulo`) VALUES (2, 1);
INSERT INTO `aplicaciones_web`.`modulos_en_certificados` (`id_certificado`, `id_modulo`) VALUES (2, 2);
INSERT INTO `aplicaciones_web`.`modulos_en_certificados` (`id_certificado`, `id_modulo`) VALUES (2, 3);

COMMIT;


-- -----------------------------------------------------
-- Data for table `aplicaciones_web`.`unidades`
-- -----------------------------------------------------
START TRANSACTION;
USE `aplicaciones_web`;
INSERT INTO `aplicaciones_web`.`unidades` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`, `id_modulo`) VALUES (1, 'Creación de páginas web con lenguaje de marcas', 'UF1302', 'HTML5', 80, 'Lenguajes de marcas y HTML5', 1);
INSERT INTO `aplicaciones_web`.`unidades` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`, `id_modulo`) VALUES (2, 'Elaboración de hojas de estilo', 'UF1303', 'CSS3', 70, 'Estilo en las páginas web con CSS3', 1);
INSERT INTO `aplicaciones_web`.`unidades` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`, `id_modulo`) VALUES (3, 'Elaboración de plantillas y formularios', 'UF1304', 'Forms', 60, 'Formularios en HTML5', 1);
INSERT INTO `aplicaciones_web`.`unidades` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`, `id_modulo`) VALUES (4, 'Programación con lenguajes de guión en páginas web', 'UF1305', 'Javascript Básico', 90, 'Programación en Javascript', 2);
INSERT INTO `aplicaciones_web`.`unidades` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`, `id_modulo`) VALUES (5, 'Pruebas de funcionalidades y optimización de páginas web', 'UF1306', 'Librerías y frameworks Javascript y Jasmine', 90, 'Uso de frameworks para Javascript', 2);
INSERT INTO `aplicaciones_web`.`unidades` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`, `id_modulo`) VALUES (6, 'Elaboración de documentos mediante lenguajes de marcas', 'UF1841', 'HTML5 y CSS3', 60, 'Desarrollo de interfaces web con HTML5 y CSS3', 4);
INSERT INTO `aplicaciones_web`.`unidades` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`, `id_modulo`) VALUES (7, 'Desarrollo y reutilización de componentes software y multimedia mediante lenguajes script', 'UF1842', 'Javascript y Frameworks', 90, 'Desarrollo de interactividad web mediante frameworks javascript', 4);
INSERT INTO `aplicaciones_web`.`unidades` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`, `id_modulo`) VALUES (8, 'Aplicación de técnicas de usabilidad y accesibilidad en el entorno cliente', 'UF1843', 'Usabilidad y Accesibilidad', 30, 'Aplicación de criterios y técnicas de usabilidad y accesibilidad en interfaces web', 4);
INSERT INTO `aplicaciones_web`.`unidades` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`, `id_modulo`) VALUES (9, 'Desarrollo de aplicaciones web en el entorno servidor', 'UF1844', 'Desarrollo Backend', 90, 'Desarrollo de aplicaciones MVC en el entorno backend', 5);
INSERT INTO `aplicaciones_web`.`unidades` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`, `id_modulo`) VALUES (10, 'Acceso a datos en aplicaciones web del entorno servidor', 'UF1845', 'Bases de datos relacionales y SQL', 90, 'Creación de bases de datos y acceso a los datos desde aplicaciones backend', 5);
INSERT INTO `aplicaciones_web`.`unidades` (`id`, `identificacion`, `codigo`, `titulo`, `horas`, `resumen`, `id_modulo`) VALUES (11, 'Desarrollo de aplicaciones web distribuidas', 'UF1846', 'Ajax, REST y SOAP', 60, 'Intercambio de datos entre aplicaciones web por vía de AJAX, REST y SOAP', 5);

COMMIT;

