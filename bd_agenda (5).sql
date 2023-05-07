-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-05-2023 a las 21:48:48
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

DROP TABLE IF EXISTS `carrera`;
CREATE TABLE IF NOT EXISTS `carrera` (
  `idcarrera` varchar(5) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `nom_carrera` varchar(70) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idcarrera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idcarrera`, `nom_carrera`) VALUES
('LIC', 'LICIENCIAUTRA EN CONTADURIA'),
('LIEI', 'LICIENCIAUTRA EN ENSEÑANZAYA DEL INGLES'),
('LIMC', 'LICIENCIAUTRA EN MEDICO CIRUJANO'),
('LSC', 'LICIENCIAUTRA SISTEMAS COMPUTACIONALES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

DROP TABLE IF EXISTS `lugar`;
CREATE TABLE IF NOT EXISTS `lugar` (
  `idlugar` int NOT NULL AUTO_INCREMENT,
  `nom_lugar` varchar(35) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idlugar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`idlugar`, `nom_lugar`) VALUES
(1, 'Salón A1'),
(2, 'Salón A2'),
(3, 'Salón A3'),
(4, 'Salón A4'),
(5, 'Salón A5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

DROP TABLE IF EXISTS `materia`;
CREATE TABLE IF NOT EXISTS `materia` (
  `idmateria` int NOT NULL AUTO_INCREMENT,
  `nom_materia` varchar(35) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idmateria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`idmateria`, `nom_materia`) VALUES
(1, 'ADMINISTRACION DE BASES DE DATOS'),
(2, 'COMPILADORES'),
(3, 'CONTABILIDAD'),
(4, 'INGLES V'),
(5, 'INVESTIGACION DE OPERACIONES II'),
(6, 'RIGOBERTO PEREZ OVANDO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE IF NOT EXISTS `profesor` (
  `idprofesor` int NOT NULL AUTO_INCREMENT,
  `nom_profesor` varchar(35) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idprofesor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`idprofesor`, `nom_profesor`) VALUES
(1, 'NURICUMBO CASTRO HECTOR ROBERTO, D'),
(2, 'TEVERA MANDUJANO JUAN JOSE, DR.'),
(3, 'CRUZ GOMEZ JOSE CARLOS, MTRO.'),
(4, 'MORALES GALDAMEZ SANDRA GUADALUPE, '),
(5, 'VELAZQUEZ TRUJILLO SABINO, DR.'),
(6, 'HERNANDEZ REYES VICENTE, MTRO.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `idcalendario` int NOT NULL AUTO_INCREMENT,
  `idmateria` int DEFAULT NULL,
  `idprofesor` int DEFAULT NULL,
  `idlugar` int DEFAULT NULL,
  `temas` varchar(50) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `gradogrupo` varchar(2) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `idcarrera` varchar(5) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `idusuario` int NOT NULL,
  PRIMARY KEY (`idcalendario`),
  KEY `idlugar` (`idlugar`),
  KEY `idprofesor` (`idprofesor`),
  KEY `idmateria` (`idmateria`),
  KEY `idusuario` (`idusuario`),
  KEY `idcarrera` (`idcarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idcalendario`, `idmateria`, `idprofesor`, `idlugar`, `temas`, `gradogrupo`, `idcarrera`, `idusuario`) VALUES
(1, 1, 1, 1, 'Seguridad de base de datos', '5J', 'LSC', 1),
(2, 2, 2, 1, 'Analizador léxico ', '5J', 'LSC', 1),
(3, 3, 3, 1, 'LAS NIFS', '5J', 'LSC', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `pass`) VALUES
(1, 'Victor', '$2y$10$Ue3Ifc3k8/C5ZfYnw8elQugav8fF65pePaN3A.LNinDWegpiCYSM6');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`),
  ADD CONSTRAINT `registro_ibfk_3` FOREIGN KEY (`idlugar`) REFERENCES `lugar` (`idlugar`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `registro_ibfk_4` FOREIGN KEY (`idmateria`) REFERENCES `materia` (`idmateria`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `registro_ibfk_5` FOREIGN KEY (`idprofesor`) REFERENCES `profesor` (`idprofesor`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `registro_ibfk_6` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `registro_ibfk_7` FOREIGN KEY (`idcarrera`) REFERENCES `carrera` (`idcarrera`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
