/*crear la BD*/
CREATE DATABASE negocio;
USE negocio;
CREATE TABLE cliente(
    dni INT(5) NOT NULL PRIMARY KEY,
    nombre VARCHAR(30),
    apellido VARCHAR(60),
    direccion VARCHAR(150),
    fechaNac DATE
);
CREATE TABLE producto (
    clave INT(5) NOT NULL PRIMARY KEY,
    nombre VARCHAR(50),
    precio INT(5)
);
CREATE TABLE proveedor(
    clave INT(5) NOT NULL PRIMARY KEY,
    nombre VARCHAR(30),
    direccion VARCHAR(60)
);
