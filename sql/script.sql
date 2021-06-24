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
    TIPO_MAQUINA VARCHAR(50) NOT NULL
);

INSERT INTO MAQUINAS 
(MAQUINA, RENDIMIENTO, VELOCIDAD,ULTIMOPARO, EVENTO, 
PAROACTUAL, EVENTOACTUAL, OE, TIPO_MAQUINA) VALUES

("EG-01",10,"100KM/H","20MIN"," "," "," ", " ","Estirado Grueso"),
("EG-02",11,"100KM/H","20MIN"," "," "," ", " ","Estirado Grueso"),
("EG-03",12,"100KM/H","20MIN"," "," "," ", " ","Estirado Grueso"),
("EG-04",13,"100KM/H","20MIN"," "," "," ", " ","Estirado Grueso"),
("EG-05",14,"100KM/H","20MIN"," "," "," ", " ","Estirado Grueso"),
("EG-06",15,"100KM/H","20MIN"," "," "," ", " ","Estirado Grueso"),
("EG-07",16,"100KM/H","20MIN"," "," "," ", " ","Estirado Grueso"),
("EG-08",17,"100KM/H","20MIN"," "," "," ", " ","Estirado Grueso"),
("EG-09",18,"100KM/H","20MIN"," "," "," ", " ","Estirado Grueso"),

("EF-01",20,"100KM/H","20MIN"," "," "," ", " ","Estirado Fino"),
("EF-02",21,"100KM/H","20MIN"," "," "," ", " ","Estirado Fino"),
("EF-03",22,"100KM/H","20MIN"," "," "," ", " ","Estirado Fino"),
("EF-04",23,"100KM/H","20MIN"," "," "," ", " ","Estirado Fino"),
("EF-05",24,"100KM/H","20MIN"," "," "," ", " ","Estirado Fino"),
("EF-06",25,"100KM/H","20MIN"," "," "," ", " ","Estirado Fino"),
("EF-07",26,"100KM/H","20MIN"," "," "," ", " ","Estirado Fino"),
("EF-08",27,"100KM/H","20MIN"," "," "," ", " ","Estirado Fino"),
("EF-09",28,"100KM/H","20MIN"," "," "," ", " ","Estirado Fino"),

("TP-01",30,"100KM/H","20MIN"," "," "," ", " ","Termo plastico"),
("TP-02",31,"100KM/H","20MIN"," "," "," ", " ","Termo plastico"),
("TP-03",32,"100KM/H","20MIN"," "," "," ", " ","Termo plastico"),
("TP-04",33,"100KM/H","20MIN"," "," "," ", " ","Termo plastico"),
("TP-05",34,"100KM/H","20MIN"," "," "," ", " ","Termo plastico"),
("TP-06",35,"100KM/H","20MIN"," "," "," ", " ","Termo plastico"),
("TP-07",36,"100KM/H","20MIN"," "," "," ", " ","Termo plastico"),
("TP-08",37,"100KM/H","20MIN"," "," "," ", " ","Termo plastico"),
("TP-09",38,"100KM/H","20MIN"," "," "," ", " ","Termo plastico"),

("TF-01",80,"100KM/H","20MIN"," "," "," ", " ","Termo Fijo"),
("TF-02",10,"100KM/H","20MIN"," "," "," ", " ","Termo Fijo"),
("TF-03",11,"100KM/H","20MIN"," "," "," ", " ","Termo Fijo"),
("TF-04",40,"100KM/H","20MIN"," "," "," ", " ","Termo Fijo"),
("TF-05",70,"100KM/H","20MIN"," "," "," ", " ","Termo Fijo"),
("TF-06",20,"100KM/H","20MIN"," "," "," ", " ","Termo Fijo"),
("TF-07",36,"100KM/H","20MIN"," "," "," ", " ","Termo Fijo"),
("TF-08",35,"100KM/H","20MIN"," "," "," ", " ","Termo Fijo"),
("TF-09",100,"100KM/H","20MIN"," "," "," ", " ","Termo Fijo"),

("IR-01",50,"100KM/H","20MIN"," "," "," ", " ","Irradiado"),
("IR-02",51,"100KM/H","20MIN"," "," "," ", " ","Irradiado"),
("IR-03",52,"100KM/H","20MIN"," "," "," ", " ","Irradiado"),
("IR-04",53,"100KM/H","20MIN"," "," "," ", " ","Irradiado"),
("IR-05",54,"100KM/H","20MIN"," "," "," ", " ","Irradiado"),
("IR-06",55,"100KM/H","20MIN"," "," "," ", " ","Irradiado"),
("IR-07",56,"100KM/H","20MIN"," "," "," ", " ","Irradiado"),
("IR-08",57,"100KM/H","20MIN"," "," "," ", " ","Irradiado"),
("IR-09",58,"100KM/H","20MIN"," "," "," ", " ","Irradiado"),

("RE-01",61,"100KM/H","20MIN"," "," "," ", " ","Reunido"),
("RE-02",62,"100KM/H","20MIN"," "," "," ", " ","Reunido"),
("RE-03",63,"100KM/H","20MIN"," "," "," ", " ","Reunido"),
("RE-04",64,"100KM/H","20MIN"," "," "," ", " ","Reunido"),
("RE-05",65,"100KM/H","20MIN"," "," "," ", " ","Reunido"),
("RE-06",66,"100KM/H","20MIN"," "," "," ", " ","Reunido"),
("RE-07",67,"100KM/H","20MIN"," "," "," ", " ","Reunido"),
("RE-08",80,"100KM/H","20MIN"," "," "," ", " ","Reunido"),
("RE-09",90,"100KM/H","20MIN"," "," "," ", " ","Reunido");

SELECT * FROM MAQUINAS;
