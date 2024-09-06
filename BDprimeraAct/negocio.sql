SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Base de datos: `negocio`
--
CREATE DATABASE negocio;
USE negocio;

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `dni` int(3) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `fechaNac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`dni`, `nombre`, `apellido`, `direccion`, `fechaNac`) VALUES
(100, 'angela', 'martinez', 'colmena', '1979-09-23'),
(299, 'tomas', 'piña', 'naucalpan', '2011-09-12'),
(300, 'cesar', 'aguirre', 'dubai', '2021-10-07'),
(301, 'marta', 'cruz', 'new york', '2011-09-09'),
(358, 'pedro', 'infante', 'izcalli', '1955-02-06'),
(402, 'agustin', 'iturbide', 'malvinas', '1999-02-06'),
(599, 'carlos', 'tercero', 'tlaxcala', '2005-05-05'),
(616, 'alonso', 'cabral', 'clara cordova', '2006-09-15'),
(666, 'juan', 'escutia', 'granjas 6', '2007-01-11'),
(777, 'maria', 'angeles', 'tlane', '2001-02-14'),
(899, 'Ares', 'Mendez', 'Bulevayork', '2007-10-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo` int(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codigo`, `nombre`, `precio`) VALUES
(101, 'mialegria', 300),
(107, 'peluche', 120),
(131, 'muneca', 258),
(181, 'balero', 370),
(192, 'terreneitor', 20),
(198, 'boba', 250),
(232, 'insector', 500),
(258, 'trompo', 50),
(315, 'pistadecarreras', 720),
(777, 'carro', 80),
(3356, 'Ares', 90000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `clave` int(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`clave`, `nombre`, `direccion`) VALUES
(2789, 'payfull', 'lima'),
(3294, 'remex', 'montevideo'),
(3312, 'saiter', 'sanIldefonso'),
(3456, 'fennecAkimbo', 'alemania'),
(6969, 'pramol', 'kenia'),
(7777, 'IndustrySkibidy', 'sknbdcity'),
(8082, 'zeclll', 'luxemburgo'),
(8432, 'mastu', 'texas'),
(8888, 'King', 'iceBox'),
(9111, 'monkek', 'barbados'),
(55553, 'Ares', 'Bulevayork');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`clave`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `dni` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=901;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `codigo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4457;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `clave` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55556;
COMMIT;

