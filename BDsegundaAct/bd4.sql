/*ultima tabla "paquetes" */

CREATE TABLE paquetes(
    codigo INT(5) PRIMARY KEY,
    descripcion VARCHAR(150),
    destinatario VARCHAR(70),
    direccionDestinatario VARCHAR(200)
);
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