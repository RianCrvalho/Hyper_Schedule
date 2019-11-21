CREATE DATABASE agenda_de_contatos;

USE agenda_de_contatos;

CREATE TABLE tb_contato (
id_contato INT NOT NULL AUTO_INCREMENT,
nome_contato VARCHAR (60) NOT NULL,
endereco VARCHAR(200),
PRIMARY KEY (id_contato)
);


CREATE TABLE tb_telefone (
id_telefone INT NOT NULL AUTO_INCREMENT,
numero_contato VARCHAR (60) NOT NULL,
id_contato INT NOT NULL,
PRIMARY KEY (id_telefone)
);


CREATE TABLE tb_endereco (
id_endereco INT NOT NULL AUTO_INCREMENT,
rua_contato VARCHAR (60) NOT NULL,
PRIMARY KEY (id_endereco)
);

CREATE TABLE tb_notas (
id_notas INT NOT NULL AUTO_INCREMENT,
nota VARCHAR (60) NOT NULL,
PRIMARY KEY (id_notas)
);