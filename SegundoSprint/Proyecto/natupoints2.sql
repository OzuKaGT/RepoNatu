-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2021 a las 05:27:39
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `natupoints2`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Actualizar_Usuario` (IN `Identificador` INT, IN `Names` VARCHAR(30), IN `Ape` VARCHAR(30), IN `fecha` DATE, IN `Tele` INT, IN `Email` VARCHAR(50), IN `pass` VARCHAR(25))  BEGIN

	UPDATE usuarios
    SET Nombres=Names, Apellidos=Ape, Fecha_Nacimiento=fecha, Telefono=Tele, Correo=Email, Contraseña=pass
    WHERE Id_Usuario=Identificador;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarCalificacion` (IN `usu` INT, IN `zon` INT, IN `stars` INT)  SQL SECURITY INVOKER
INSERT INTO calificación (Id_Usuario, ID_Zona, N_Estrellas)
VALUES (usu, zon, stars)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarFauna` (IN `ID` INT, IN `Name` VARCHAR(30), IN `Type` ENUM('Ave','Insecto','Amfibio','Reptil'), IN `Descrip` VARCHAR(250), IN `Image` JSON)  SQL SECURITY INVOKER
INSERT INTO fauna
(NombreFauna, Tipo, Descripción, Imagen)
VALUES (Name, Type, Descrip, Image)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarFlora` (IN `ID` INT(11), IN `Name` VARCHAR(30), IN `Type` ENUM('Graminea','Leñosa','Espermatofita','Hongo','Maleza'), IN `Descrip` VARCHAR(250), IN `Image` JSON)  SQL SECURITY INVOKER
INSERT INTO flora
(Nombre, Tipo, Descripción, Imagen)
VALUES (Name, Type, Descrip, Image)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarNatural` (IN `name` VARCHAR(50), IN `ubica` VARCHAR(50), IN `descip` TEXT, IN `image` VARCHAR(50))  SQL SECURITY INVOKER
INSERT INTO zonas_naturales 
VALUES ('', name, ubica, descrip, image)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `BuscarZona` (IN `zona` VARCHAR(50))  NO SQL
SELECT * FROM zonas_verdes WHERE Nombre LIKE CONCAT (zona,'%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Buscar_Calificacion` (IN `buscar` VARCHAR(30))  NO SQL
SELECT * FROM calificación WHERE ID_Calificacion=buscar$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Buscar_Fauna` (IN `codigo` INT)  BEGIN
	SELECT * FROM fauna WHERE ID_Fauna=codigo;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Buscar_Flora` (IN `codigo` INT)  BEGIN
	SELECT * FROM flora WHERE ID_Flora=codigo;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Buscar_Usuario` (IN `buscar` VARCHAR(50))  SQL SECURITY INVOKER
SELECT * FROM usuarios WHERE Nombres LIKE CONCAT (buscar, '%')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Eliminar_usuario` (IN `identificador` INT)  SQL SECURITY INVOKER
DELETE FROM usuarios WHERE Id_Usuario=identificador$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Eliminar_zona` (IN `ID` INT)  SQL SECURITY INVOKER
DELETE FROM zonas_verdes WHERE ID_Zona=ID$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarUsuario` (OUT `buscar` VARCHAR(30))  BEGIN

	SELECT * FROM usuarios;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Mostrar_Una_Zona` (INOUT `Identificador` INT)  SQL SECURITY INVOKER
BEGIN 

	SELECT * FROM zonas_verdes WHERE ID_Zona=Identificador;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Mostrar_Un_Usuario` (IN `Identificador` INT, OUT `buscar` INT)  BEGIN

	SELECT Id_Usuario, Nombres, Apellidos FROM usuarios WHERE Id_Usuario=Identificador;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Mostrar_Zona_N` (IN `Identificador` INT, INOUT `zona` INT)  BEGIN

	SELECT ID_Zona, Nombre, Ubicación FROM zonas_naturales WHERE ID_Zona=Identificador;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `NaturalesFF` ()  SQL SECURITY INVOKER
SELECT zonas_naturales.Nombre AS NombreZona, flora.Nombre AS NombreFlora, fauna.NombreFauna AS NombreFauna 
FROM zonas_naturales 
INNER JOIN flora 
	ON zonas_naturales.ID_Flora = flora.ID_Flora
INNER JOIN fauna
	ON zonas_naturales.ID_Fauna = fauna.ID_Fauna$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `OrdenApellidoASC` (OUT `Last` VARCHAR(10))  SQL SECURITY INVOKER
SELECT Nombres, Apellidos FROM usuarios ORDER BY Apellidos ASC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `OrdenApellidoDESC` (OUT `Last` VARCHAR(30))  NO SQL
SELECT Nombres, Apellidos FROM usuarios ORDER BY Apellidos DESC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `OrdenNombreASC` (OUT `orden` INT)  BEGIN 

	SELECT * FROM usuarios ORDER BY Nombres ASC;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `OrdenNombreDESC` (OUT `Name` VARCHAR(10))  SQL SECURITY INVOKER
SELECT Nombres, Apellidos FROM usuarios ORDER BY Nombres DESC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `OrdenZonasASC` (OUT `orden` VARCHAR(10))  SQL SECURITY INVOKER
SELECT * FROM zonas_verdes ORDER BY Nombre ASC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `OrdenZonasDESC` (OUT `orden` VARCHAR(10))  NO SQL
SELECT * FROM zonas_verdes ORDER BY Nombre DESC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Promedio_Estrellas` (OUT `prom` INT)  BEGIN
	SELECT 'Promedio de estrellas', AVG(N_Estrellas) AS Resultado FROM calificación;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarUsuario` (IN `Name` VARCHAR(30), IN `Ape` VARCHAR(30), IN `Fecha` DATE, IN `Tele` INT, IN `Email` VARCHAR(50), IN `Pass` VARCHAR(25))  BEGIN

	INSERT INTO usuarios_natu
    VALUES ('', Name, Ape, Fecha, Tele, Email, Pass);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Suma_Estrellas` (OUT `sumaS` INT)  BEGIN
	SELECT 'Suma De Estrellas', SUM(N_Estrellas) AS Total FROM calificación;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `UsuarioCalificacionZona` (OUT `Usu` VARCHAR(30))  SQL SECURITY INVOKER
SELECT CONCAT (usuarios.Nombres,'      ',usuarios.Apellidos) AS Nombre_Completo, calificación.N_Estrellas, zonas_verdes.Nombre AS NombreZona
FROM usuarios  
INNER JOIN calificación
ON usuarios.Id_Usuario = calificación.Id_Usuario
INNER JOIN zonas_verdes
ON calificación.ID_Zona = zonas_verdes.ID_Zona$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Zona_Calificacion` (IN `buscar` INT, OUT `Name` VARCHAR(30))  SQL SECURITY INVOKER
SELECT zonas_artificiales.Nombre, calificación.N_Estrellas 
FROM zonas_artificiales 
INNER JOIN calificación
ON calificación.ID_Calificacion=buscar 
AND zonas_artificiales.ID_Calificacion=buscar$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins_natu`
--

CREATE TABLE `admins_natu` (
  `Id_Admin` int(12) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_natu`
--

CREATE TABLE `calificacion_natu` (
  `ID_Calificacion` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `ID_Zona` int(11) NOT NULL,
  `N_Estrellas` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fauna_natu`
--

CREATE TABLE `fauna_natu` (
  `ID_Fauna` int(11) NOT NULL,
  `ID_ZonaNA` int(11) NOT NULL,
  `NombreFauna` varchar(200) NOT NULL,
  `Tipo` enum('Ave','Insecto','Amfibio','Reptil') NOT NULL,
  `Descripción` mediumtext NOT NULL,
  `Imagen` varchar(121) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flora_natu`
--

CREATE TABLE `flora_natu` (
  `ID_Flora` int(11) NOT NULL,
  `ID_ZonaNA` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Tipo` enum('Graminea','Leñosa','Espermatofita','Hongo','Maleza') NOT NULL,
  `Descripción` mediumtext NOT NULL,
  `Imagen` varchar(124) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_usuario_natu`
--

CREATE TABLE `inicio_usuario_natu` (
  `Correo` varchar(70) NOT NULL,
  `Contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inicio_usuario_natu`
--

INSERT INTO `inicio_usuario_natu` (`Correo`, `Contraseña`) VALUES
('dasdas@jkaskd', '123456'),
('Andre@gmail.com', 'e10adc3949ba59abbe56e057f20f88'),
('Camilo@gmail.com', 'e10adc3949ba59abbe56e057f20f88'),
('jarodriguez98800@misena.edu.co', '9450476b384b32d8ad8b758e76c98a'),
('dasdas@jkaskd', '123456'),
('Andre@gmail.com', 'e10adc3949ba59abbe56e057f20f88'),
('Camilo@gmail.com', 'e10adc3949ba59abbe56e057f20f88'),
('jarodriguez98800@misena.edu.co', '9450476b384b32d8ad8b758e76c98a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_natu`
--

CREATE TABLE `usuarios_natu` (
  `Id_Usuario` int(9) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(40) NOT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Telefono` int(10) NOT NULL,
  `Correo` varchar(70) NOT NULL,
  `Contraseña` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_natu`
--

INSERT INTO `usuarios_natu` (`Id_Usuario`, `Nombres`, `Apellidos`, `Fecha_Nacimiento`, `Telefono`, `Correo`, `Contraseña`) VALUES
(2, 'Vanesa', 'Mendez', '1997-10-16', 312, 'dasdas@jkaskd', '123456'),
(3, 'Andres', 'Amazo', '2002-08-05', 2147483647, 'Andre@gmail.com', 'e10adc3949ba59abbe56e057f20f88'),
(4, 'Camilo', 'Perez', '2003-05-08', 2147483647, 'Camilo@gmail.com', 'e10adc3949ba59abbe56e057f20f88'),
(5, 'Jaider', 'Rodriguez', '2002-08-05', 2147483647, 'jarodriguez98800@misena.edu.co', '9450476b384b32d8ad8b758e76c98a');

--
-- Disparadores `usuarios_natu`
--
DELIMITER $$
CREATE TRIGGER `Eliminar_correo` BEFORE DELETE ON `usuarios_natu` FOR EACH ROW DELETE FROM inicio_usuario_natu 
WHERE Correo=old.Correo
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Inicio_Sesion` AFTER INSERT ON `usuarios_natu` FOR EACH ROW INSERT INTO inicio_usuario_natu (Correo, Contraseña)
VALUES (new.Correo, new.Contraseña)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas_artificiales_natu`
--

CREATE TABLE `zonas_artificiales_natu` (
  `ID_ZonaAR` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Ubicacion` varchar(300) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zonas_artificiales_natu`
--

INSERT INTO `zonas_artificiales_natu` (`ID_ZonaAR`, `Nombre`, `Ubicacion`, `Descripcion`, `Imagen`) VALUES
(1, 'San mateo', 'San mateo', 'Ta bien uwu', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQD3uF9fof34MCwlX06duyr1F__MwWG2lJfvQ&usqp=CAU'),
(4, 'Soacha centro', 'Soacha', 'Parque wonito uwu', 'frefr');

--
-- Disparadores `zonas_artificiales_natu`
--
DELIMITER $$
CREATE TRIGGER `Agregar_zonaAR` AFTER INSERT ON `zonas_artificiales_natu` FOR EACH ROW INSERT INTO zonas_natu (ID_ZonaAR, Nombre) VALUES (new.ID_ZonaAR, new.Nombre)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas_natu`
--

CREATE TABLE `zonas_natu` (
  `ID_Zona` int(11) NOT NULL,
  `ID_ZonaNA` int(11) DEFAULT NULL,
  `ID_ZonaAR` int(11) DEFAULT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zonas_natu`
--

INSERT INTO `zonas_natu` (`ID_Zona`, `ID_ZonaNA`, `ID_ZonaAR`, `Nombre`) VALUES
(1, 1, NULL, 'Boquemonte'),
(2, NULL, 1, 'San mateo'),
(7, 4, NULL, 'Piamonte'),
(8, NULL, 4, 'Soacha centro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas_naturales_natu`
--

CREATE TABLE `zonas_naturales_natu` (
  `ID_ZonaNA` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Ubicacion` varchar(300) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zonas_naturales_natu`
--

INSERT INTO `zonas_naturales_natu` (`ID_ZonaNA`, `Nombre`, `Ubicacion`, `Descripcion`, `Imagen`) VALUES
(1, 'Boquemonte', 'Via la mesa', 'Parque natural', 'https://3.bp.blogspot.com/-YyVTQqBE9xY/XNuGgtjNI4I/AAAAAAAAPKY/jzfmqM3PGWYHKjBe88374i6fPb6Zo5COQCEwYBhgL/s1600/img_2403-crop-u8848.png'),
(4, 'Piamonte', 'Via tequendama', 'w', 'dede');

--
-- Disparadores `zonas_naturales_natu`
--
DELIMITER $$
CREATE TRIGGER `Agregar_zona` AFTER INSERT ON `zonas_naturales_natu` FOR EACH ROW INSERT INTO zonas_natu (ID_ZonaNA, Nombre) VALUES (new.ID_ZonaNA, new.Nombre)
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins_natu`
--
ALTER TABLE `admins_natu`
  ADD PRIMARY KEY (`Id_Admin`);

--
-- Indices de la tabla `calificacion_natu`
--
ALTER TABLE `calificacion_natu`
  ADD PRIMARY KEY (`ID_Calificacion`),
  ADD KEY `Calificacion` (`Id_Usuario`),
  ADD KEY `ID_Zona` (`ID_Zona`);

--
-- Indices de la tabla `fauna_natu`
--
ALTER TABLE `fauna_natu`
  ADD PRIMARY KEY (`ID_Fauna`),
  ADD KEY `ID_Zona` (`ID_ZonaNA`);

--
-- Indices de la tabla `flora_natu`
--
ALTER TABLE `flora_natu`
  ADD PRIMARY KEY (`ID_Flora`),
  ADD KEY `ID_Zona` (`ID_ZonaNA`);

--
-- Indices de la tabla `inicio_usuario_natu`
--
ALTER TABLE `inicio_usuario_natu`
  ADD KEY `Correo` (`Correo`);

--
-- Indices de la tabla `usuarios_natu`
--
ALTER TABLE `usuarios_natu`
  ADD PRIMARY KEY (`Id_Usuario`,`Correo`),
  ADD KEY `Correo` (`Correo`);

--
-- Indices de la tabla `zonas_artificiales_natu`
--
ALTER TABLE `zonas_artificiales_natu`
  ADD PRIMARY KEY (`ID_ZonaAR`);

--
-- Indices de la tabla `zonas_natu`
--
ALTER TABLE `zonas_natu`
  ADD PRIMARY KEY (`ID_Zona`),
  ADD KEY `ID_ZonaNA` (`ID_ZonaNA`),
  ADD KEY `ID_ZonaAR` (`ID_ZonaAR`);

--
-- Indices de la tabla `zonas_naturales_natu`
--
ALTER TABLE `zonas_naturales_natu`
  ADD PRIMARY KEY (`ID_ZonaNA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificacion_natu`
--
ALTER TABLE `calificacion_natu`
  MODIFY `ID_Calificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fauna_natu`
--
ALTER TABLE `fauna_natu`
  MODIFY `ID_Fauna` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `flora_natu`
--
ALTER TABLE `flora_natu`
  MODIFY `ID_Flora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios_natu`
--
ALTER TABLE `usuarios_natu`
  MODIFY `Id_Usuario` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `zonas_artificiales_natu`
--
ALTER TABLE `zonas_artificiales_natu`
  MODIFY `ID_ZonaAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `zonas_natu`
--
ALTER TABLE `zonas_natu`
  MODIFY `ID_Zona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `zonas_naturales_natu`
--
ALTER TABLE `zonas_naturales_natu`
  MODIFY `ID_ZonaNA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificacion_natu`
--
ALTER TABLE `calificacion_natu`
  ADD CONSTRAINT `calificacion_natu_ibfk_7` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios_natu` (`Id_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calificacion_natu_ibfk_8` FOREIGN KEY (`ID_Zona`) REFERENCES `zonas_natu` (`ID_Zona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fauna_natu`
--
ALTER TABLE `fauna_natu`
  ADD CONSTRAINT `fauna_natu_ibfk_1` FOREIGN KEY (`ID_ZonaNA`) REFERENCES `zonas_naturales_natu` (`ID_ZonaNA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `flora_natu`
--
ALTER TABLE `flora_natu`
  ADD CONSTRAINT `flora_natu_ibfk_1` FOREIGN KEY (`ID_ZonaNA`) REFERENCES `zonas_naturales_natu` (`ID_ZonaNA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inicio_usuario_natu`
--
ALTER TABLE `inicio_usuario_natu`
  ADD CONSTRAINT `inicio_usuario_natu_ibfk_1` FOREIGN KEY (`Correo`) REFERENCES `usuarios_natu` (`Correo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `zonas_natu`
--
ALTER TABLE `zonas_natu`
  ADD CONSTRAINT `zonas_natu_ibfk_1` FOREIGN KEY (`ID_ZonaAR`) REFERENCES `zonas_artificiales_natu` (`ID_ZonaAR`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `zonas_natu_ibfk_2` FOREIGN KEY (`ID_ZonaNA`) REFERENCES `zonas_naturales_natu` (`ID_ZonaNA`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
