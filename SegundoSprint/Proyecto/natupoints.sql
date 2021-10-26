-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2021 a las 03:33:54
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
-- Base de datos: `natupoints`
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

	INSERT INTO usuarios
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
-- Estructura de tabla para la tabla `actualizacion_usuarios`
--

CREATE TABLE `actualizacion_usuarios` (
  `Id_Usuario` int(11) DEFAULT NULL,
  `anterior_Nombres` varchar(30) DEFAULT NULL,
  `anterior_Apellidos` varchar(40) DEFAULT NULL,
  `anterior_Fecha_Nacimiento` date DEFAULT NULL,
  `anterior_Telefono` int(10) DEFAULT NULL,
  `anterior_Correo` varchar(70) DEFAULT NULL,
  `anterior_Contraseña` varchar(30) DEFAULT NULL,
  `nuevo_Nombres` varchar(30) DEFAULT NULL,
  `nuevo_Apellidos` varchar(40) DEFAULT NULL,
  `nuevo_Fecha_Nacimiento` date DEFAULT NULL,
  `nuevo_Telefono` int(10) DEFAULT NULL,
  `nuevo_Correo` varchar(70) DEFAULT NULL,
  `nuevo_Contraseña` varchar(30) DEFAULT NULL,
  `UsuarioModificacion` varchar(20) NOT NULL,
  `Fecha_Modificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actualizacion_usuarios`
--

INSERT INTO `actualizacion_usuarios` (`Id_Usuario`, `anterior_Nombres`, `anterior_Apellidos`, `anterior_Fecha_Nacimiento`, `anterior_Telefono`, `anterior_Correo`, `anterior_Contraseña`, `nuevo_Nombres`, `nuevo_Apellidos`, `nuevo_Fecha_Nacimiento`, `nuevo_Telefono`, `nuevo_Correo`, `nuevo_Contraseña`, `UsuarioModificacion`, `Fecha_Modificacion`) VALUES
(NULL, 'Nataly ', 'Carvajal', '2003-10-02', 322, 'NataC@gmail.com', '123456', 'Gerardo ', 'Jimenez', '2000-12-12', 312, 'Gerardito@gmail.com', '123456', 'root@localhost', '2021-06-16 00:00:00'),
(NULL, 'Mateo ', 'Gonzalez', '2002-04-12', 310, 'MateoG@gmail.com', '123456', 'Maria', 'Romero', '2000-05-12', 315, 'MariaR@gmail.com', '123456', 'root@localhost', '2021-06-16 14:46:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificación`
--

CREATE TABLE `calificación` (
  `ID_Calificacion` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `ID_Zona` int(11) NOT NULL,
  `N_Estrellas` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calificación`
--

INSERT INTO `calificación` (`ID_Calificacion`, `Id_Usuario`, `ID_Zona`, `N_Estrellas`) VALUES
(1, 12, 8, '3'),
(2, 11, 9, '4'),
(3, 14, 3, '3'),
(4, 15, 10, '5'),
(5, 13, 4, '4'),
(6, 13, 7, '4'),
(7, 12, 6, '4'),
(8, 11, 2, '3'),
(9, 11, 5, '5'),
(10, 18, 8, '1'),
(11, 14, 8, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fauna`
--

CREATE TABLE `fauna` (
  `ID_Fauna` int(11) NOT NULL,
  `ID_Zona` int(11) NOT NULL,
  `NombreFauna` varchar(200) NOT NULL,
  `Tipo` enum('Ave','Insecto','Amfibio','Reptil') NOT NULL,
  `Descripción` mediumtext NOT NULL,
  `Imagen` varchar(121) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flora`
--

CREATE TABLE `flora` (
  `ID_Flora` int(11) NOT NULL,
  `ID_Zona` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Tipo` enum('Graminea','Leñosa','Espermatofita','Hongo','Maleza') NOT NULL,
  `Descripción` mediumtext NOT NULL,
  `Imagen` varchar(124) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio_usuario`
--

CREATE TABLE `inicio_usuario` (
  `Correo` varchar(30) NOT NULL,
  `Contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inicio_usuario`
--

INSERT INTO `inicio_usuario` (`Correo`, `Contraseña`) VALUES
('OscarR@gmail.com', '123456'),
('JaiderR@gmail.com', '123465'),
('JhosepB@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_Usuario` int(9) NOT NULL,
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(40) NOT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Telefono` int(10) NOT NULL,
  `Correo` varchar(70) NOT NULL,
  `Contraseña` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_Usuario`, `Nombres`, `Apellidos`, `Fecha_Nacimiento`, `Telefono`, `Correo`, `Contraseña`) VALUES
(11, 'Oscar', 'Rodriguez', '2000-07-24', 305, 'OscarR@gmail.com', '2468'),
(12, 'Jaider ', 'Rodriguez', '2003-05-24', 312, 'JaiderR@gmail.com', '123456'),
(13, 'Sarena ', 'Linares', '2002-11-29', 320, 'SarenaL@gmail.com', '123456'),
(14, 'Maria', 'Romero', '2000-05-12', 315, 'MariaR@gmail.com', '123456'),
(15, 'Gerardo ', 'Jimenez', '2000-12-12', 312, 'Gerardito@gmail.com', '123456'),
(18, 'Jhosep', 'Barrios', '2000-08-25', 310, 'JhosepB@gmail.com', '123456');

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `Eliminar_Usuario` BEFORE DELETE ON `usuarios` FOR EACH ROW INSERT INTO usuarios_eliminados (Nombre_Borrado, Apellidos_Borrado, Fecha_Borrado, Telefono_Borrado, Correo_Borrado, Contraseña_Borrado, Fecha_De_Borrado, Usuario_Responsable)
VALUES (old.Nombres, old.Apellidos, old.Fecha_Nacimiento, old.Telefono, old.Correo, old.Contraseña, now(), CURRENT_USER())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Inicio_Sesion` BEFORE INSERT ON `usuarios` FOR EACH ROW INSERT INTO inicio_usuario (Correo, Contraseña)
VALUES (new.Correo, new.Contraseña)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `actualizar_usuario` BEFORE UPDATE ON `usuarios` FOR EACH ROW INSERT INTO actualizacion_usuarios (anterior_Nombres, anterior_Apellidos, anterior_Fecha_Nacimiento, anterior_Telefono, anterior_Correo, anterior_Contraseña, nuevo_Nombres, nuevo_Apellidos, nuevo_Fecha_Nacimiento, nuevo_Telefono, nuevo_Correo, nuevo_Contraseña, UsuarioModificacion, Fecha_Modificacion) 
VALUES (old.Nombres, old.Apellidos, old.Fecha_Nacimiento, old.Telefono, old.Correo, old.Contraseña, new.Nombres, new.Apellidos, new.Fecha_Nacimiento, new.Telefono, new.Correo, new.Contraseña, current_user(), now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_eliminados`
--

CREATE TABLE `usuarios_eliminados` (
  `Id_Usuario` int(11) NOT NULL,
  `Nombre_Borrado` varchar(30) NOT NULL,
  `Apellidos_Borrado` varchar(40) NOT NULL,
  `Fecha_Borrado` date NOT NULL,
  `Telefono_Borrado` int(10) NOT NULL,
  `Correo_Borrado` varchar(40) NOT NULL,
  `Contraseña_Borrado` varchar(30) NOT NULL,
  `Fecha_De_Borrado` datetime NOT NULL,
  `Usuario_Responsable` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_eliminados`
--

INSERT INTO `usuarios_eliminados` (`Id_Usuario`, `Nombre_Borrado`, `Apellidos_Borrado`, `Fecha_Borrado`, `Telefono_Borrado`, `Correo_Borrado`, `Contraseña_Borrado`, `Fecha_De_Borrado`, `Usuario_Responsable`) VALUES
(0, 'Jhosep', 'Barrios', '2000-12-15', 312, 'YusepeB@gmail.com', '123456', '2021-06-16 14:54:20', 'root@localhost');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas_artificiales`
--

CREATE TABLE `zonas_artificiales` (
  `ID_Zona` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Ubicación` varchar(300) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zonas_artificiales`
--

INSERT INTO `zonas_artificiales` (`ID_Zona`, `Nombre`, `Ubicación`, `Descripcion`, `Imagen`) VALUES
(5, 'Parque San Mateo', 'San mateo', '', ''),
(3, 'Parque Tibanica', 'San Mateo - Soacha', '', ''),
(2, 'Las Arenosas', 'Soacha Compartir', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas_naturales`
--

CREATE TABLE `zonas_naturales` (
  `ID_Zona` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Ubicación` varchar(300) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zonas_naturales`
--

INSERT INTO `zonas_naturales` (`ID_Zona`, `Nombre`, `Ubicación`, `Descripcion`, `Imagen`) VALUES
(1, 'Reserva Natural Boquemonte', 'Via la mesa ', '', ''),
(4, 'Parque Natural Chicaque', 'Via Mosquera', '', ''),
(6, 'Humedal Neuta', 'Quintas de la laguna ', '', ''),
(7, 'Humedal Indumil', 'Via indumil', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas_verdes`
--

CREATE TABLE `zonas_verdes` (
  `ID_Zona` int(15) NOT NULL,
  `Nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zonas_verdes`
--

INSERT INTO `zonas_verdes` (`ID_Zona`, `Nombre`) VALUES
(1, 'Boquemonte'),
(2, 'Las arenosas'),
(3, 'Tibanica'),
(4, 'Chicaque'),
(5, 'San mateo'),
(6, 'Humedal Neuta'),
(7, 'Humedal Indumil'),
(8, 'La Poma'),
(9, 'Portalegre'),
(10, 'Cagua'),
(11, 'La amistad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actualizacion_usuarios`
--
ALTER TABLE `actualizacion_usuarios`
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- Indices de la tabla `calificación`
--
ALTER TABLE `calificación`
  ADD PRIMARY KEY (`ID_Calificacion`),
  ADD KEY `Calificacion` (`Id_Usuario`),
  ADD KEY `ID_Zona` (`ID_Zona`);

--
-- Indices de la tabla `fauna`
--
ALTER TABLE `fauna`
  ADD PRIMARY KEY (`ID_Fauna`),
  ADD KEY `ID_Zona` (`ID_Zona`);

--
-- Indices de la tabla `flora`
--
ALTER TABLE `flora`
  ADD PRIMARY KEY (`ID_Flora`),
  ADD KEY `ID_Zona` (`ID_Zona`);

--
-- Indices de la tabla `inicio_usuario`
--
ALTER TABLE `inicio_usuario`
  ADD KEY `Correo` (`Correo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usuario`,`Correo`),
  ADD KEY `Correo` (`Correo`);

--
-- Indices de la tabla `usuarios_eliminados`
--
ALTER TABLE `usuarios_eliminados`
  ADD KEY `Id_Usuario` (`Id_Usuario`);

--
-- Indices de la tabla `zonas_artificiales`
--
ALTER TABLE `zonas_artificiales`
  ADD KEY `Zona Artificial` (`ID_Zona`);

--
-- Indices de la tabla `zonas_naturales`
--
ALTER TABLE `zonas_naturales`
  ADD PRIMARY KEY (`ID_Zona`),
  ADD KEY `Zona Natural` (`ID_Zona`);

--
-- Indices de la tabla `zonas_verdes`
--
ALTER TABLE `zonas_verdes`
  ADD PRIMARY KEY (`ID_Zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificación`
--
ALTER TABLE `calificación`
  MODIFY `ID_Calificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `fauna`
--
ALTER TABLE `fauna`
  MODIFY `ID_Fauna` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `flora`
--
ALTER TABLE `flora`
  MODIFY `ID_Flora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_Usuario` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `zonas_verdes`
--
ALTER TABLE `zonas_verdes`
  MODIFY `ID_Zona` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actualizacion_usuarios`
--
ALTER TABLE `actualizacion_usuarios`
  ADD CONSTRAINT `actualizacion_usuarios_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios` (`Id_Usuario`);

--
-- Filtros para la tabla `calificación`
--
ALTER TABLE `calificación`
  ADD CONSTRAINT `calificación_ibfk_3` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios` (`Id_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `calificación_ibfk_4` FOREIGN KEY (`ID_Zona`) REFERENCES `zonas_verdes` (`ID_Zona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fauna`
--
ALTER TABLE `fauna`
  ADD CONSTRAINT `fauna_ibfk_1` FOREIGN KEY (`ID_Zona`) REFERENCES `zonas_naturales` (`ID_Zona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `flora`
--
ALTER TABLE `flora`
  ADD CONSTRAINT `flora_ibfk_1` FOREIGN KEY (`ID_Zona`) REFERENCES `zonas_naturales` (`ID_Zona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inicio_usuario`
--
ALTER TABLE `inicio_usuario`
  ADD CONSTRAINT `inicio_usuario_ibfk_1` FOREIGN KEY (`Correo`) REFERENCES `usuarios` (`Correo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `zonas_artificiales`
--
ALTER TABLE `zonas_artificiales`
  ADD CONSTRAINT `zonas_artificiales_ibfk_1` FOREIGN KEY (`ID_Zona`) REFERENCES `zonas_verdes` (`ID_Zona`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `zonas_naturales`
--
ALTER TABLE `zonas_naturales`
  ADD CONSTRAINT `zonas_naturales_ibfk_1` FOREIGN KEY (`ID_Zona`) REFERENCES `zonas_verdes` (`ID_Zona`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
