

CREATE SCHEMA IF NOT EXISTS `alunosci4` DEFAULT CHARACTER SET utf8 ;
USE alunosci4;

CREATE TABLE Alunos (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` VARCHAR(45) NULL,
  `endereco` VARCHAR(150) NULL,
  `fotopath` VARCHAR(100) NULL
)
ENGINE = InnoDB;


INSERT INTO Alunos(nome, endereco, fotopath) VALUES ('John Romero', 'Rua: Ocean Blvd, 1535 E, Long Beach, CA, EUA', '..\imagens\1.jpg');
INSERT INTO Alunos(nome, endereco, fotopath) VALUES ('Hideo Kojima', 'Rua Nishigahara, 28, Tokyo, Japão', '..\imagens\2.jpg');
INSERT INTO Alunos(nome, endereco, fotopath) VALUES ('Cliff Blezinski', 'Rua: Main, 2033, San Diego, CA, EUA', '..\imagens\3.jpg');
INSERT INTO Alunos(nome, endereco, fotopath) VALUES ('John Carmack', 'Av Serene, 1544, Las Vegas, NV, EUA', '..\imagens\4.jpg');
INSERT INTO Alunos(nome, endereco, fotopath) VALUES ('Ed Boom', 'Av 14th, 4160, Sacramento, CA, EUA', '..\imagens\5.jpg');
INSERT INTO Alunos(nome, endereco, fotopath) VALUES ('Gabe Newell', 'Rua Castro, 650, San Francisco, CA, EUA', '..\imagens\6.jpg');


--CREATE USER 'adminalunos'@'localhost' IDENTIFIED BY 'x1y2z3';
--
--GRANT INSERT ON alunosci4.* TO 'adminalunos'@'localhost';
--GRANT DELETE ON alunosci4.* TO 'adminalunos'@'localhost';
--GRANT UPDATE ON alunosci4.* TO 'adminalunos'@'localhost';
--GRANT SELECT ON alunosci4.* TO 'adminalunos'@'localhost';