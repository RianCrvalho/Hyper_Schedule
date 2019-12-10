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
id_usr INT NOT NULL,
nome_cont VARCHAR(30) NOT NULL,
numero_cont VARCHAR (30) NOT NULL,
email_cont VARCHAR (100), 
PRIMARY KEY (id_cont),
FOREIGN KEY(id_usr) REFERENCES usuario(id_usr)
);

CREATE TABLE endereco(
id_endereco INT NOT NULL AUTO_INCREMENT,
id_cont INT  NOT NULL,	
rua VARCHAR (100),
numero VARCHAR (6),
cep VARCHAR (10),
FOREIGN  KEY (id_cont) REFERENCES contato (id_cont)
);

CREATE TABLE notas(
id_nota INT NOT NULL AUTO_INCREMENT,
id_usr INT NOT NULL,
data_nota date,
nota VARCHAR(200), 
PRIMARY KEY (id_nota),
FOREIGN KEY (id_usr) REFERENCES usuario(id_usr) 
);


/*CREATE TABLE contatos_usuario (
id_cont INT NOT NULL AUTO_INCREMENT, 
id_usr INT NOT NULL,
PRIMARY KEY (id_cont, id_usr),
FOREIGN KEY (id_cont) REFERENCES contato (id_cont),
FOREIGN KEY (id_usr) REFERENCES usuario (id_usr)
);*/


--Inserção usuarios--
Insert into usuario(nome_usr,senha_usr) values ("Rian","root");
Insert into usuario(nome_usr,senha_usr) values ("João","1234");

--Inserções contatos --
Insert into contato(id_usr,nome_cont,numero_cont,endereco,email_cont) values ("1","Jack","99516789","rua","roo@.com");
Insert into contato(id_usr,nome_cont,numero_cont,endereco,email_cont) values ("1","Chan","99524789","mala velha","Chan@.com");


Insert into contato(id_usr,nome_cont,numero_cont,endereco,email_cont) values ("2","Mia","99554265","mariana","Mia@.com");
Insert into contato(id_usr,nome_cont,numero_cont,endereco,email_cont) values ("2","Kali","9969859","jurubeba","Kali@.com");

--Inserções notas--
Insert into notas(id_usr,data_nota,nota) values ("1","2019-12-13","Vai da certo");
Insert into notas(id_usr,data_nota,nota) values ("2","2019-11-14","Já deu foi certo");