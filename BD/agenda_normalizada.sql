 
CREATE DATABASE agenda;

USE agenda;

CREATE TABLE usuario (
id_usr INT NOT NULL AUTO_INCREMENT,
nome_usr VARCHAR (60) NOT NULL,
senha_usr VARCHAR(15),
PRIMARY KEY (id_usr)
);


CREATE TABLE contato (
id_contato INT NOT NULL AUTO_INCREMENT,
id_usr INT NOT NULL,
numero_contato VARCHAR (30) NOT NULL,
endereco VARCHAR (255),
email_contato VARCHAR (100), 
PRIMARY KEY (id_contato),
FOREIGN KEY (id_usr) REFERENCES usuario(id_usr)
);


CREATE TABLE notas(
id_nota INT NOT NULL AUTO_INCREMENT,
id_usr INT NOT NULL,
data_nota VARCHAR (10) NOT NULL,
nota TEXT, 
PRIMARY KEY (id_nota),
FOREIGN KEY (id_usr) REFERENCES usuario(id_usr) 
);


CREATE TABLE contatos_usuario (
id_contato INT NOT NULL AUTO_INCREMENT, 
id_usr INT NOT NULL,
PRIMARY KEY (id_contato, id_usr),
FOREIGN KEY (id_contato) REFERENCES contato (id_contato),
FOREIGN KEY (id_usr) REFERENCES usuario (id_usr)
);




