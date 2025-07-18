#JUAN JOSE CHAVERRA
    
    
    # project_Finaly_Censa


Este proyecto es de la clase del jueves.php
#base de datos

```sql

 -- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2025 a las 02:02:54
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcensa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registropersonas`
--

CREATE TABLE `registropersonas` (
  `Id` int(50) NOT NULL,
  `Nombre` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Apellido` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Edad` int(11) NOT NULL,
  `Correo` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registropersonas`
--

INSERT INTO `registropersonas` (`Id`, `Nombre`, `Apellido`, `Edad`, `Correo`, `Telefono`) VALUES
(1, 'Gerson', 'Largo', 23, 'G@G', 324),
(1034, 'Gerson', 'Largo', 24, 'Gersonlargo74@gmail.com', 2147483647),
(1035, 'David', 'Largo', 24, 'Gr24@Gmail.com', 2147483647),
(1036, 'David', 'Largo', 24, 'Gr24@Gmail.com', 2147483647),
(1037, 'David', 'Largo', 24, 'Gr24@Gmail.com', 2147483647),
(123456, 'Gerson', 'Largo', 24, 'gers0nl4r6o2001@gmail.com', 2147483647),
(2147483647, 'Gerson', 'Largo', 24, 'gers0nl4r6o2001@gmail.com', 2147483647);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registropersonas`
--
ALTER TABLE `registropersonas`
  ADD UNIQUE KEY `Id` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


```
