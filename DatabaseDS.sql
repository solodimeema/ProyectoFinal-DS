-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: Database
-- Tiempo de generación: 08-12-2022 a las 15:25:51
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `DatabaseDS`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cargo`
--

CREATE TABLE `Cargo` (
  `ID` int NOT NULL,
  `Funcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Cargo`
--

INSERT INTO `Cargo` (`ID`, `Funcion`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `ID` int NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `username` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Contraseña` varchar(200) NOT NULL,
  `Cargo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`ID`, `Nombre`, `username`, `Contraseña`, `Cargo`) VALUES
(4, 'Emmanuel Nuñez Guerra', 'dimeema', '$2y$10$nALvxozqiKk1NxqG9xxYeOzqqYjQZGSf5yNr4IUx6dEH8Jd9jgEVi', 1),
(6, 'Tarsicio Ramos Lemus', 'elprofe', '$2y$10$dhFFaxdDQnM6Dx9f6WXLj.8fzHT3JFhM1UGOs0/otxwwczDtt51wO', 2),
(35, 'Emily Gómez Núñez', 'emi', '$2y$10$lMAUE9ifi9JautEKCczxoe64gz/N48963Ne0VkZPyzhCHgnLN.seG', 2),
(36, 'Arturo Rodríguez Pérez ', 'rodri5', '$2y$10$BGowWapd8X6cQX4kh68r9Oef1d4ONKassJzAFfThcUW/HEyY/2u..', 1),
(37, 'Rosaura Guerra Cazares', 'rossy13', '$2y$10$2V0mH0Ci0/70AHJHvyZ5sOUFHt86U3wb2BGlKfFlOvLDA3FEBXOxS', 2),
(38, 'X', 'x', '$2y$10$O.rj/eqzTYGyWmh1DxNPj.hJyzK.ONuXnYRYFlAqm0iWn5mDSzIk2', 2),
(39, 'Y', 'y', '$2y$10$9zgzIwIZDNwnfDX8oglANeZ1Ld5mAIYEAWBJzsXX8BHwJCiUoVW32', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Cargo`
--
ALTER TABLE `Cargo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Cargo` (`Cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Cargo`
--
ALTER TABLE `Cargo`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Cargo`) REFERENCES `Cargo` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
