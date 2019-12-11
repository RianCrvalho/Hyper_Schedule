--Inserção usuarios--
Insert into usuario(nome_usr,senha_usr) values ("Rian","root");
Insert into usuario(nome_usr,senha_usr) values ("João","1234");

--Inserções contatos --
Insert into contato(id_usr,nome_cont,numero_cont,email_cont) values ("1","Jack","99516789","roo@.com");
Insert into contato(id_usr,nome_cont,numero_cont,email_cont) values ("1","Chan","99524789","Chan@.com");


Insert into contato(id_usr,nome_cont,numero_cont,email_cont) values ("2","Mia","99554265","Mia@.com");
Insert into contato(id_usr,nome_cont,numero_cont,email_cont) values ("2","Kali","9969859","Kali@.com");

--Inserções notas--
Insert into notas(id_usr,data_nota,nota) values ("1","2019-12-13","Vai da certo");
Insert into notas(id_usr,data_nota,nota) values ("2","2019-11-14","Já deu foi certo");

--Inserção endereço--
Insert into endereco(id_cont,rua,numero,cep) values("1","Ruakd","338","642300");
Insert into endereco(id_cont,rua,numero,cep) values("2","Jacob","390","643400");