<?php
  include("../Model/Usuario_Model.php");
  include("../BD/conexao.php");

  Class Usuario_Control{
  	public $dados;
  	public $conn;

}  
  function __construct(){
  	$this->dados = new Usuario_Model();
  	$this->conn = new conexao();

  }
  function View(){
  	$sql = "SELECT * FROM usuario";
  	$d = $this->conn-> Conect();
  	$dados = $d->prepare($sql);
  	$dados->execute();
  	return $dados;

  }
  function add($nome_usr,$senha_usr){
  	$this->dados->setNome($nome_usr);
  	$this->dados->setSenha($senha_usr);
  	$sql = "INSERT INTO usuario(nome_usr,senha_usr) VALUES (:nome_usr,:senha_usr);";
  	$d = $this->conn-> Conect();
  	$dados = $d->prepare($sql);
  	$dados->bindValue(":name_usr", $this->dados->getNome());
  	$dados->bindValue(":senha_usr", $this->dados->getSenha());
  	$dados->execute();
  	header("Location: ../View/Usuario_View.php");

  }


  ?>