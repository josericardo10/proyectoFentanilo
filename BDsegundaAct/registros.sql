INSERT INTO `camioneros`(`dni`, `nombre`, `telefono`, `salario`, `direccion`, `localidad`) VALUES 
(069,'ricardo',562821219,1500,'cantaros','nicolas romero'),
(011,'juan',5520374100,1500,'cantaros ','ecatepec'),
(039,'roman',5541200310,1600,'hondo ','tlaxcala'),
(065,'gael',5548990012,1550,'zona b','chiluca'),
(040,'adriel',55240936,1700,'zan miguel','atizapan'),
(012,'daniel',5537579901,1400,'san juan ','sayavedra'),
(009,'jonathan',552471876,1700,'solaridad','tlane'),
(001,'isac',5520107731,1450,'ezperanza','sanilde'),
(005,'carlos',5524093641,1800,'zona sur ','cdmex'),
(071,'carmen',5525304110,1950,'san pablo ','tlane');
INSERT INTO camiones(`matricula`, `tipo`, `modelo`, `potencia`) VALUES 
('3629dj2','carga','ford1990','7000'),
('3724dj3','carga','ford1992','6800'),
('jpr2210','camioneta','nisan200','6000'),
('prt3300','camioneta','nisan500','4500'),
('ata8118','transporte ','toyotaimperial','5000'),
('ptr7120','trnasporte','volkvagen','3500'),
('bpb2150','casual','yeta1992','3000'),
('ptb317','casual','yetta ','3300'),
('2515bff','moto','d125','2000'),
('38176tf','moto','rtx','2500');
INSERT INTO `provincia`(`codigoProvincia`, `nombre`) VALUES ('1910','independencia'),
('2819','Jose Ricardo'),
('3728','san sebastian'),
('4637','geronimo'),
('5546','chiapas'),
('6454','colima'),
('7363','durango'),
('8272','gunajuato'),
('9181','cloro'),
('1091','orellana');  
INSERT INTO `paquetes`
(`codigo`, `descripcion`, `destinatario`, `direccionDestinatario`) 
VALUES
 (1722,'consola','ricardo','col.victoria'),
(8910,'playera','leo','madrid'),
( 2006,'short','robert','independencia'),
(9274,'tenis','luis ','libertad'),
( 1021,'camra','angel ','paz'),
( 0013,'lapicera','armando','esperanza'),
(1235,'vestido','ernesto ','lirios'),
(4515,'collar','manuel','robles'),
(7389,'colchon','gabriel ','prados'),
(6610,'perfume ','ares ','rosales');