--crear tabla de proveedor
CREATE TABLE `proveedor` (
  `clave` int(5) NOT NULL PRIMARY KEY,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(150) NOT NULL
)
--registros de provedor
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