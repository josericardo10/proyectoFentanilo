CREATE TABLE `producto` (
  `codigo` int(5) NOT NULL PRIMARY KEY,
  `nombre` varchar(30) NOT NULL,
  `precio` int(5) NOT NULL
)
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
----