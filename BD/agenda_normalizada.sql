 
CREATE DATABASE agenda;

USE agenda;

CREATE TABLE usuario (
id_usr INT NOT NULL AUTO_INCREMENT,
nome_usr VARCHAR (60) NOT NULL,
senha_usr VARCHAR(15),
PRIMARY KEY (id_usr)
);


CREATE TABLE contato (
id_cont INT NOT NULL AUTO_INCREMENT,
nome_cont VARCHAR(30) NOT NULL,
numero_cont VARCHAR (30) NOT NULL,
endereco VARCHAR (255),
email_cont VARCHAR (100), 
PRIMARY KEY (id_cont)
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
id_cont INT NOT NULL AUTO_INCREMENT, 
id_usr INT NOT NULL,
PRIMARY KEY (id_cont, id_usr),
FOREIGN KEY (id_cont) REFERENCES contato (id_cont),
FOREIGN KEY (id_usr) REFERENCES usuario (id_usr)
);




