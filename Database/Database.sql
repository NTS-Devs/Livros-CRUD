CREATE DATABASE BD_LWEB2_CRUD;

USE BD_LWEB2_CRUD;

CREATE TABLE Livros (
  ID INT AUTO_INCREMENT,
  titulo VARCHAR(255) NOT NULL,
  autor VARCHAR(255) NOT NULL,
  data_publicacao DATE NOT NULL,
  PRIMARY KEY (ID)
)
