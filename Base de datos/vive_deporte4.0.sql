-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2019 a las 18:06:48
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vive_deporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `correo_admi` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_admi` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fechanac_admi` date NOT NULL,
  `celular_admi` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `salario_admi` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`correo_admi`, `nombre_admi`, `fechanac_admi`, `celular_admi`, `salario_admi`) VALUES
('2asdsa', 'asdasd', '2019-11-18', '32432', 1112),
('3wr4@gmail.com', '23234', '2019-11-27', '234324', 2333),
('charly@gmail.com', 'charly poniente', '2019-11-04', '23424234', 3456),
('flash@gmail.com', 'flash', '1970-01-01', '121212', 0),
('fraca@gmail.com', 'qqqqqqqqqq', '2019-11-19', '121312321', 1111),
('francisc121231o@gmail.com', 'luis alberto p', '2019-11-21', '3344343', 9997),
('franciscotuyu@gmail.com', 'Luis Tuyu Chale', '2019-01-01', '9995520890', 9000),
('ftuyu@gmail.com', 'luis', '2019-11-04', '345', 21433),
('hulk@gmail.com', 'hulk', '2019-08-27', '9995529012', 0),
('peter@gmail.com', 'peter', '2019-11-18', '234567', 100),
('superman@gmail.com', 'superman', '1970-01-01', '324234234', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

CREATE TABLE `convocatorias` (
  `id_conv` int(5) NOT NULL,
  `id_emp` int(5) NOT NULL,
  `nombre_conv` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `costo_conv` int(10) DEFAULT NULL,
  `acumulador_participante_conv` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `convocatorias`
--

INSERT INTO `convocatorias` (`id_conv`, `id_emp`, `nombre_conv`, `costo_conv`, `acumulador_participante_conv`) VALUES
(1, 1, 'carrera contra el cancer de mama', 1100, 2),
(2, 1, 'carrera por la vida', 9000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias_infoevento`
--

CREATE TABLE `convocatorias_infoevento` (
  `id_conv` int(5) DEFAULT NULL,
  `lugar_conv` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `hora_conv` time NOT NULL,
  `fecha_conv` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias_precio`
--

CREATE TABLE `convocatorias_precio` (
  `id_conv` int(5) DEFAULT NULL,
  `modalidad_cp` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio_cp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_emp` int(5) NOT NULL,
  `nombre_emp` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `cel_emp` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_emp` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `repre_emp` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_emp`, `nombre_emp`, `cel_emp`, `direccion_emp`, `repre_emp`) VALUES
(1, 'la lupita', '324234', 'carretera progreso', 'lucio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `id_conv` int(5) DEFAULT NULL,
  `correo_us` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_ins` date NOT NULL,
  `hora_ins` time NOT NULL,
  `num_participante` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`id_conv`, `correo_us`, `fecha_ins`, `hora_ins`, `num_participante`) VALUES
(1, 'participante@gmail.com', '2019-11-24', '10:53:52', 1),
(1, 'p4@gmial.com', '2019-11-24', '11:01:04', 2),
(2, 'p5@gmail.com', '2019-11-24', '11:01:54', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kits`
--

CREATE TABLE `kits` (
  `id_conv` int(5) DEFAULT NULL,
  `fecha_kits` date NOT NULL,
  `lugar_kits` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `requisitos_kits` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_admin`
--

CREATE TABLE `login_admin` (
  `correo_admi` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena_admi` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_admi` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login_admin`
--

INSERT INTO `login_admin` (`correo_admi`, `contrasena_admi`, `tipo_admi`) VALUES
('ftuyu@gmail.com', '12345', 'MO'),
('francisc121231o@gmail.com', '19072016Enter', 'MA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_us`
--

CREATE TABLE `login_us` (
  `correo_us` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contrasena_us` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login_us`
--

INSERT INTO `login_us` (`correo_us`, `contrasena_us`) VALUES
('p4@gmial.com', '12343'),
('p5@gmail.com', '123124'),
('participante@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramas_eventos`
--

CREATE TABLE `ramas_eventos` (
  `id_conv` int(5) DEFAULT NULL,
  `modalidad_re` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL,
  `categoria_re` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad_re` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `correo_us` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_us` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cel_us` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `genero_us` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `fechanac_us` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`correo_us`, `nombre_us`, `cel_us`, `genero_us`, `fechanac_us`) VALUES
('p4@gmial.com', 'p4', '343543', 'M', '2019-11-08'),
('p5@gmail.com', 'p5', '45654', 'F', '2019-11-13'),
('participante@gmail.com', 'participante', '9992412903', 'M', '2019-11-20'),
('participante2@gmail.com', 'participante2', '12324432', 'M', '2019-11-20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`correo_admi`),
  ADD UNIQUE KEY `celular_admi` (`celular_admi`);

--
-- Indices de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD PRIMARY KEY (`id_conv`),
  ADD KEY `id_emp` (`id_emp`);

--
-- Indices de la tabla `convocatorias_infoevento`
--
ALTER TABLE `convocatorias_infoevento`
  ADD KEY `id_conv` (`id_conv`);

--
-- Indices de la tabla `convocatorias_precio`
--
ALTER TABLE `convocatorias_precio`
  ADD KEY `id_conv` (`id_conv`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_emp`),
  ADD UNIQUE KEY `nombre_emp` (`nombre_emp`),
  ADD UNIQUE KEY `cel_emp` (`cel_emp`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD KEY `id_us_fk2` (`correo_us`),
  ADD KEY `id_conv` (`id_conv`);

--
-- Indices de la tabla `kits`
--
ALTER TABLE `kits`
  ADD KEY `id_conv` (`id_conv`);

--
-- Indices de la tabla `login_admin`
--
ALTER TABLE `login_admin`
  ADD KEY `correo_admi` (`correo_admi`);

--
-- Indices de la tabla `login_us`
--
ALTER TABLE `login_us`
  ADD UNIQUE KEY `contrasena_us` (`contrasena_us`),
  ADD KEY `correo_us` (`correo_us`);

--
-- Indices de la tabla `ramas_eventos`
--
ALTER TABLE `ramas_eventos`
  ADD KEY `id_conv` (`id_conv`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo_us`),
  ADD UNIQUE KEY `cel_us` (`cel_us`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  MODIFY `id_conv` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_emp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD CONSTRAINT `convocatorias_ibfk_1` FOREIGN KEY (`id_emp`) REFERENCES `empresas` (`id_emp`);

--
-- Filtros para la tabla `convocatorias_infoevento`
--
ALTER TABLE `convocatorias_infoevento`
  ADD CONSTRAINT `convocatorias_infoevento_ibfk_1` FOREIGN KEY (`id_conv`) REFERENCES `convocatorias` (`id_conv`);

--
-- Filtros para la tabla `convocatorias_precio`
--
ALTER TABLE `convocatorias_precio`
  ADD CONSTRAINT `convocatorias_precio_ibfk_1` FOREIGN KEY (`id_conv`) REFERENCES `convocatorias` (`id_conv`);

--
-- Filtros para la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD CONSTRAINT `id_us_fk2` FOREIGN KEY (`correo_us`) REFERENCES `usuarios` (`correo_us`),
  ADD CONSTRAINT `inscripciones_ibfk_1` FOREIGN KEY (`id_conv`) REFERENCES `convocatorias` (`id_conv`);

--
-- Filtros para la tabla `kits`
--
ALTER TABLE `kits`
  ADD CONSTRAINT `kits_ibfk_1` FOREIGN KEY (`id_conv`) REFERENCES `convocatorias` (`id_conv`);

--
-- Filtros para la tabla `login_admin`
--
ALTER TABLE `login_admin`
  ADD CONSTRAINT `login_admin_ibfk_1` FOREIGN KEY (`correo_admi`) REFERENCES `administradores` (`correo_admi`);

--
-- Filtros para la tabla `login_us`
--
ALTER TABLE `login_us`
  ADD CONSTRAINT `login_us_ibfk_1` FOREIGN KEY (`correo_us`) REFERENCES `usuarios` (`correo_us`);

--
-- Filtros para la tabla `ramas_eventos`
--
ALTER TABLE `ramas_eventos`
  ADD CONSTRAINT `ramas_eventos_ibfk_1` FOREIGN KEY (`id_conv`) REFERENCES `convocatorias` (`id_conv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
