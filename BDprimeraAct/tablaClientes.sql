CREATE TABLE `cliente` (
  `dni` int(3) NOT NULL PRIMARY KEY,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `fechaNac` date NOT NULL
)
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
