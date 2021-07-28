-- CREATE USER 'PRUEBAUSER'@'localhost' IDENTIFIED BY 'Pruebas1';
-- GRANT ALL PRIVILEGES ON PRUEBAS.* TO 'PRUEBAUSER'@'localhost';
-- FLUSH PRIVILEGES;

-- DROP DATABASE IF EXISTS laboratoriosql;
-- CREATE DATABASE laboratoriosql;
-- USE laboratoriosql;

DROP TABLE IF EXISTS USUARIOS;

CREATE TABLE USUARIOS(
    ID INT IDENTITY(1,1) PRIMARY KEY,
    USUARIO VARCHAR(50) NOT NULL,
    CONTRASENA VARCHAR(50) NOT NULL,
    ROL VARCHAR(50) NOT NULL,
    FECHACREACION   DATETIME NOT NULL
);

INSERT INTO USUARIOS (USUARIO, CONTRASENA, ROL, FECHACREACION) VALUES 
('JUAN PEREZ','12345678A','ADMINISTRADOR',  CURRENT_TIMESTAMP),
('RUBEN SANCHEZ','12345678A','SUPERVISOR MATTO',  CURRENT_TIMESTAMP),
('JOSE RAMIREZ','12345678A','SUPERVISOR MATTO',  CURRENT_TIMESTAMP),
('LEOPOLDO AGUILAR','12345678A','OPERADOR',  CURRENT_TIMESTAMP);

SELECT * FROM USUARIOS;

DROP TABLE IF EXISTS MAQUINAS;

CREATE TABLE MAQUINAS (
    ID INT IDENTITY(1,1) PRIMARY KEY,
    MAQUINA VARCHAR(50) NOT NULL,
    RENDIMIENTO FLOAT(5) NOT NULL,
    VELOCIDAD VARCHAR(50) NOT NULL,
    ULTIMOPARO VARCHAR(50) NOT NULL,
    EVENTO VARCHAR(50) NOT NULL,
    PAROACTUAL VARCHAR(50) NOT NULL,
    EVENTOACTUAL VARCHAR(50) NOT NULL,
    OE VARCHAR(50) NOT NULL,
    TIPO_MAQUINA_HIDDEN INTEGER NOT NULL,
    TIPO_MAQUINA INTEGER NOT NULL,
    TIEMPO_MUERTO INTEGER NOT NULL,
    TIEMPO_PERDIDO INTEGER NOT NULL,
    TIEMPO_CICLO INTEGER NOT NULL,
    TIEMPO_OPERATIVO INTEGER NOT NULL,
    TIEMPO_DISPONIBLE INTEGER NOT NULL,
    PRODUCCION_REAL INTEGER NOT NULL,
    PRODUCCION_PREVISTA INTEGER NOT NULL,
    PRODUCCION_OK INTEGER NOT NULL,
);

INSERT INTO MAQUINAS 
(MAQUINA, RENDIMIENTO, VELOCIDAD,ULTIMOPARO, EVENTO, 
PAROACTUAL, EVENTOACTUAL, OE, TIPO_MAQUINA_HIDDEN, TIPO_MAQUINA) VALUES

('LIR601',10,'100KM/H','20MIN',' ',' ',' ', ' ','Irradiado','Irradiado',1,2,3,4,5,6,7,8),
('LRP601',11,'100KM/H','20MIN',' ',' ',' ', ' ','Repase','Repase',1,2,3,4,5,6,7,8),
('LRP602',12,'100KM/H','20MIN',' ',' ',' ', ' ','Repase','Repase',1,2,3,4,5,6,7,8),
('LAF601',80,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Fijo','Termo Fijo',1,2,3,4,5,6,7,8),
('LAF602',10,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Fijo','Termo Fijo',1,2,3,4,5,6,7,8),
('LAF603',11,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Fijo','Termo Fijo',1,2,3,4,5,6,7,8),
('LAF604',40,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Fijo','Termo Fijo',1,2,3,4,5,6,7,8),
('LAF605',70,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Fijo','Termo Fijo',1,2,3,4,5,6,7,8),
('LAF606',20,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Fijo','Termo Fijo',1,2,3,4,5,6,7,8),
('LAF607',36,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Fijo','Termo Fijo',1,2,3,4,5,6,7,8),
('LAP601',30,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Plastico','Termo Plastico',1,2,3,4,5,6,7,8),
('LAP602',31,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Plastico','Termo Plastico',1,2,3,4,5,6,7,8),
('LAP603',32,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Plastico','Termo Plastico',1,2,3,4,5,6,7,8),
('LAP604',33,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Plastico','Termo Plastico',1,2,3,4,5,6,7,8),
('LAP605',34,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Plastico','Termo Plastico',1,2,3,4,5,6,7,8),
('LAP606',35,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Plastico','Termo Plastico',1,2,3,4,5,6,7,8),
('LAP607',36,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Plastico','Termo Plastico',1,2,3,4,5,6,7,8),
('LAP608',37,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Plastico','Termo Plastico',1,2,3,4,5,6,7,8),
('LAP609',38,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Plastico','Termo Plastico',1,2,3,4,5,6,7,8),
('LAP610',38,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Plastico','Termo Plastico',1,2,3,4,5,6,7,8),
('LAP611',38,'100KM/H','20MIN',' ',' ',' ', ' ','Termo_Plastico','Termo Plastico',1,2,3,4,5,6,7,8),
('LEM601',90,'100KM/H','20MIN',' ',' ',' ', ' ','Tubulado','Tubulado',1,2,3,4,5,6,7,8);

SELECT * FROM MAQUINAS;
