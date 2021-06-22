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

("EG-01","50%","100KM/H","20MIN"," "," "," ", " ","estirado-grueso"),
("EG-02","50%","100KM/H","20MIN"," "," "," ", " ","estirado-grueso"),
("EG-03","50%","100KM/H","20MIN"," "," "," ", " ","estirado-grueso"),
("EG-04","50%","100KM/H","20MIN"," "," "," ", " ","estirado-grueso"),
("EG-05","50%","100KM/H","20MIN"," "," "," ", " ","estirado-grueso"),
("EG-06","50%","100KM/H","20MIN"," "," "," ", " ","estirado-grueso"),
("EG-07","50%","100KM/H","20MIN"," "," "," ", " ","estirado-grueso"),
("EG-08","50%","100KM/H","20MIN"," "," "," ", " ","estirado-grueso"),
("EG-09","50%","100KM/H","20MIN"," "," "," ", " ","estirado-grueso"),

("EF-01","50%","100KM/H","20MIN"," "," "," ", " ","estirado-fino"),
("EF-02","50%","100KM/H","20MIN"," "," "," ", " ","estirado-fino"),
("EF-03","50%","100KM/H","20MIN"," "," "," ", " ","estirado-fino"),
("EF-04","50%","100KM/H","20MIN"," "," "," ", " ","estirado-fino"),
("EF-05","50%","100KM/H","20MIN"," "," "," ", " ","estirado-fino"),
("EF-06","50%","100KM/H","20MIN"," "," "," ", " ","estirado-fino"),
("EF-07","50%","100KM/H","20MIN"," "," "," ", " ","estirado-fino"),
("EF-08","50%","100KM/H","20MIN"," "," "," ", " ","estirado-fino"),
("EF-09","50%","100KM/H","20MIN"," "," "," ", " ","estirado-fino"),

("TP-01","50%","100KM/H","20MIN"," "," "," ", " ","termo-plasticos"),
("TP-02","50%","100KM/H","20MIN"," "," "," ", " ","termo-plasticos"),
("TP-03","50%","100KM/H","20MIN"," "," "," ", " ","termo-plasticos"),
("TP-04","50%","100KM/H","20MIN"," "," "," ", " ","termo-plasticos"),
("TP-05","50%","100KM/H","20MIN"," "," "," ", " ","termo-plasticos"),
("TP-06","50%","100KM/H","20MIN"," "," "," ", " ","termo-plasticos"),
("TP-07","50%","100KM/H","20MIN"," "," "," ", " ","termo-plasticos"),
("TP-08","50%","100KM/H","20MIN"," "," "," ", " ","termo-plasticos"),
("TP-09","50%","100KM/H","20MIN"," "," "," ", " ","termo-plasticos"),

("TF-01","50%","100KM/H","20MIN"," "," "," ", " ","termo-fijo"),
("TF-02","50%","100KM/H","20MIN"," "," "," ", " ","termo-fijo"),
("TF-03","50%","100KM/H","20MIN"," "," "," ", " ","termo-fijo"),
("TF-04","50%","100KM/H","20MIN"," "," "," ", " ","termo-fijo"),
("TF-05","50%","100KM/H","20MIN"," "," "," ", " ","termo-fijo"),
("TF-06","50%","100KM/H","20MIN"," "," "," ", " ","termo-fijo"),
("TF-07","50%","100KM/H","20MIN"," "," "," ", " ","termo-fijo"),
("TF-08","50%","100KM/H","20MIN"," "," "," ", " ","termo-fijo"),
("TF-09","50%","100KM/H","20MIN"," "," "," ", " ","termo-fijo"),

("IR-01","50%","100KM/H","20MIN"," "," "," ", " ","irradiado"),
("IR-02","50%","100KM/H","20MIN"," "," "," ", " ","irradiado"),
("IR-03","50%","100KM/H","20MIN"," "," "," ", " ","irradiado"),
("IR-04","50%","100KM/H","20MIN"," "," "," ", " ","irradiado"),
("IR-05","50%","100KM/H","20MIN"," "," "," ", " ","irradiado"),
("IR-06","50%","100KM/H","20MIN"," "," "," ", " ","irradiado"),
("IR-07","50%","100KM/H","20MIN"," "," "," ", " ","irradiado"),
("IR-08","50%","100KM/H","20MIN"," "," "," ", " ","irradiado"),
("IR-09","50%","100KM/H","20MIN"," "," "," ", " ","irradiado"),

("RE-01","50%","100KM/H","20MIN"," "," "," ", " ","reunido"),
("RE-02","50%","100KM/H","20MIN"," "," "," ", " ","reunido"),
("RE-03","50%","100KM/H","20MIN"," "," "," ", " ","reunido"),
("RE-04","50%","100KM/H","20MIN"," "," "," ", " ","reunido"),
("RE-05","50%","100KM/H","20MIN"," "," "," ", " ","reunido"),
("RE-06","50%","100KM/H","20MIN"," "," "," ", " ","reunido"),
("RE-07","50%","100KM/H","20MIN"," "," "," ", " ","reunido"),
("RE-08","50%","100KM/H","20MIN"," "," "," ", " ","reunido"),
("RE-09","50%","100KM/H","20MIN"," "," "," ", " ","reunido");

SELECT * FROM MAQUINAS;
