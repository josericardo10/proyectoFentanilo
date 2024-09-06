--crear base de datos --
CREATE DATABASE consecionaria;
--usar base de datos--
USE consecionaria;
--crear tabla cliente 
CREATE TABLE cliente(
    codigo INT(6) AUTO_INCREMENT PRIMARY KEY ,
    nombre VARCHAR(60),
    direccion VARCHAR(150),
    ciudad VARCHAR(150),
    telefono int(10)
);
--crear tabla autos
CREATE TABLE autos(
    matricula VARCHAR(10) PRIMARY KEY,
    marca VARCHAR(50),
    modelo VARCHAR(60),
    color VARCHAR(30),
    precio INT(7)
);
--crear tabla servicios
CREATE TABLE servicios(
    codigo INT(5) AUTO_INCREMENT PRIMARY KEY,
    c_filtro BOOLEAN default false,
    c_aceite BOOLEAN default false,
    c_frenos BOOLEAN default false,
    otros VARCHAR(150)
);
