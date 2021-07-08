-- CREATE USER 'PRUEBAUSER'@'localhost' IDENTIFIED BY 'Pruebas1';
-- GRANT ALL PRIVILEGES ON PRUEBAS.* TO 'PRUEBAUSER'@'localhost';
-- FLUSH PRIVILEGES;

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
    RENDIMIENTO FLOAT(5) NOT NULL,
    VELOCIDAD VARCHAR(50) NOT NULL,
    ULTIMOPARO VARCHAR(50) NOT NULL,
    EVENTO VARCHAR(50) NOT NULL,
    PAROACTUAL VARCHAR(50) NOT NULL,
    EVENTOACTUAL VARCHAR(50) NOT NULL,
    OE VARCHAR(50) NOT NULL,
    TIPO_MAQUINA_HIDDEN VARCHAR(50) NOT NULL,
    TIPO_MAQUINA VARCHAR(50) NOT NULL
);

INSERT INTO MAQUINAS 
(MAQUINA, RENDIMIENTO, VELOCIDAD,ULTIMOPARO, EVENTO, 
PAROACTUAL, EVENTOACTUAL, OE, TIPO_MAQUINA_HIDDEN, TIPO_MAQUINA) VALUES

("LIR601",10,"100KM/H","20MIN"," "," "," ", " ","Irradiado","Irradiado"),
("LRP601",11,"100KM/H","20MIN"," "," "," ", " ","Repase","Repase"),
("LRP602",12,"100KM/H","20MIN"," "," "," ", " ","Repase","Repase"),
("LAF601",80,"100KM/H","20MIN"," "," "," ", " ","Termo_Fijo","Termo Fijo"),
("LAF602",10,"100KM/H","20MIN"," "," "," ", " ","Termo_Fijo","Termo Fijo"),
("LAF603",11,"100KM/H","20MIN"," "," "," ", " ","Termo_Fijo","Termo Fijo"),
("LAF604",40,"100KM/H","20MIN"," "," "," ", " ","Termo_Fijo","Termo Fijo"),
("LAF605",70,"100KM/H","20MIN"," "," "," ", " ","Termo_Fijo","Termo Fijo"),
("LAF606",20,"100KM/H","20MIN"," "," "," ", " ","Termo_Fijo","Termo Fijo"),
("LAF607",36,"100KM/H","20MIN"," "," "," ", " ","Termo_Fijo","Termo Fijo"),
("LAP601",30,"100KM/H","20MIN"," "," "," ", " ","Termo_Plastico","Termo Plastico"),
("LAP602",31,"100KM/H","20MIN"," "," "," ", " ","Termo_Plastico","Termo Plastico"),
("LAP603",32,"100KM/H","20MIN"," "," "," ", " ","Termo_Plastico","Termo Plastico"),
("LAP604",33,"100KM/H","20MIN"," "," "," ", " ","Termo_Plastico","Termo Plastico"),
("LAP605",34,"100KM/H","20MIN"," "," "," ", " ","Termo_Plastico","Termo Plastico"),
("LAP606",35,"100KM/H","20MIN"," "," "," ", " ","Termo_Plastico","Termo Plastico"),
("LAP607",36,"100KM/H","20MIN"," "," "," ", " ","Termo_Plastico","Termo Plastico"),
("LAP608",37,"100KM/H","20MIN"," "," "," ", " ","Termo_Plastico","Termo Plastico"),
("LAP609",38,"100KM/H","20MIN"," "," "," ", " ","Termo_Plastico","Termo Plastico"),
("LAP610",38,"100KM/H","20MIN"," "," "," ", " ","Termo_Plastico","Termo Plastico"),
("LAP611",38,"100KM/H","20MIN"," "," "," ", " ","Termo_Plastico","Termo Plastico"),
("LEM601",90,"100KM/H","20MIN"," "," "," ", " ","Tubulado","Tubulado");

SELECT * FROM MAQUINAS;
