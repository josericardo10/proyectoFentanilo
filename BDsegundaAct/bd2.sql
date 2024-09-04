/* voy a intentar usar los archivos sql aver si funcionan
segunda tabla  de datos "camiones"   */
CREATE TABLE camiones (
    matricula VARCHAR(15) PRIMARY KEY NOT NULL,
    tipo VARCHAR(30),
    modelo VARCHAR(100),
    potencia VARCHAR(100)
);

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

SELECT * FROM camiones;