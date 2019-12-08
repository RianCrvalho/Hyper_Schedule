 
CREATE DATABASE agenda;

USE agenda;

CREATE TABLE tb_usuario (
id_usuario INT NOT NULL AUTO_INCREMENT,
nome_usuario VARCHAR (60) NOT NULL,
senha_usuario VARCHAR(15),
PRIMARY KEY (id_usuario)
);


CREATE TABLE tb_contato (
id_contato INT NOT NULL AUTO_INCREMENT,
id_usuario INT NOT NULL,
numero_contato VARCHAR (30) NOT NULL,
endereco VARCHAR (255),
email_contato VARCHAR (100), 
PRIMARY KEY (id_contato)
);


CREATE TABLE tb_notas(
id_nota INT NOT NULL AUTO_INCREMENT,
id_usuario INT NOT NULL,
data_nota VARCHAR (10) NOT NULL,
nota TEXT, 
PRIMARY KEY (id_nota),
FOREIGN KEY (id_usuario) REFERENCES tb_usuario(id_usuario) 
);


CREATE TABLE tb_contatos_usuario (
id_contato INT NOT NULL AUTO_INCREMENT,
id_usuario INT NOT NULL,
PRIMARY KEY (id_contato, id_usuario),
FOREIGN KEY (id_contato) REFERENCES tb_contato (id_contato),
FOREIGN KEY (id_usuario) REFERENCES tb_usuario (id_usuario)
);