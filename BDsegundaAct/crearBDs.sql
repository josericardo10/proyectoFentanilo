CREATE DATABASE transportes;
USE transportes;

CREATE TABLE camioneros(
    dni INT(5) PRIMARY KEY NOT NULL,
    nombre VARCHAR(60),
    telefono INT(12),
    salario INT(5),
    direccion VARCHAR(150),
    localidad VARCHAR(150)
); 

CREATE TABLE camiones (
    matricula VARCHAR(15) PRIMARY KEY NOT NULL,
    tipo VARCHAR(30),
    modelo VARCHAR(100),
    potencia VARCHAR(100)
);

CREATE TABLE provincia (
codigoProvincia INT(5) PRIMARY KEY,
nombre VARCHAR (40));

CREATE TABLE paquetes(
    codigo INT(5) PRIMARY KEY,
    descripcion VARCHAR(150),
    destinatario VARCHAR(70),
    direccionDestinatario VARCHAR(200)
);