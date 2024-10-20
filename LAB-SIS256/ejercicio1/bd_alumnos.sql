
-- Database: bd_alumnos

CREATE DATABASE IF NOT EXISTS bd_alumnos;
USE bd_alumnos;

-- Table structure for 'carreras'
CREATE TABLE IF NOT EXISTS carreras (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    carrera VARCHAR(50) NOT NULL
);

-- Table structure for 'alumnos'
CREATE TABLE IF NOT EXISTS alumnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fotografia VARCHAR(100),
    nombres VARCHAR(30) NOT NULL,
    apellidos VARCHAR(30) NOT NULL,
    cu VARCHAR(15) NOT NULL,
    sexo CHAR(1) NOT NULL,
    codigocarrera INT NOT NULL,
    FOREIGN KEY (codigocarrera) REFERENCES carreras(codigo)
);

-- Example data for 'carreras'
INSERT INTO carreras (carrera) VALUES ('Ingeniería de Sistemas');
INSERT INTO carreras (carrera) VALUES ('Ingeniería Civil');
INSERT INTO carreras (carrera) VALUES ('Ingeniería Industrial');
INSERT INTO carreras (carrera) VALUES ('Medicina');
