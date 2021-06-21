DROP DATABASE IF EXISTS PRUEBAS;
CREATE DATABASE PRUEBAS;
USE PRUEBAS;

CREATE TABLE USUARIOS(
    ID INT(5) ZEROFILL AUTO_INCREMENT PRIMARY KEY,
    USUARIO VARCHAR(50) NOT NULL,
    CONTRASENA VARCHAR(50) NOT NULL,
    ROL VARCHAR(50) NOT NULL,
    FECHACREACION   DATETIME NOT NULL
);

INSERT INTO USUARIOS (USUARIO, CONTRASENA, ROL, FECHACREACION) VALUES 
("JUAN PEREZ","12345678A","ADMINISTRADOR", NOW()),
("RUBEN SANCHEZ","12345678A","SUPERVISOR MATTO", NOW()),
("JOSE RAMIREZ","12345678A","SUPERVISOR MATTO", NOW()),
("LEOPOLDO AGUILAR","12345678A","OPERADOR", NOW());

SELECT * FROM USUARIOS;

CREATE TABLE MAQUINAS (
    ID INT(5) ZEROFILL AUTO_INCREMENT PRIMARY KEY,
    MAQUINA VARCHAR(50) NOT NULL,
    RENDIMIENTO VARCHAR(50) NOT NULL,
    VELOCIDAD VARCHAR(50) NOT NULL,
    ULTIMOPARO VARCHAR(50) NOT NULL,
    EVENTO VARCHAR(50) NOT NULL,
    PAROACTUAL VARCHAR(50) NOT NULL,
    EVENTOACTUAL VARCHAR(50) NOT NULL,
    OE VARCHAR(50) NOT NULL,
    TIPO_MAQUINA VARCHAR(50) NOT NULL
);

INSERT INTO MAQUINAS 
(MAQUINA, RENDIMIENTO, VELOCIDAD,ULTIMOPARO, EVENTO, 
PAROACTUAL, EVENTOACTUAL, OE, TIPO_MAQUINA) VALUES
("TF-01","50%","100KM/H","20MIN"," "," "," ", " "," ");

SELECT * FROM MAQUINAS;
