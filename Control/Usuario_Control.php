<?php
  include("../Model/Usuario_Model.php");
  include("../BD/conexao.php");
  session_start();

  Class Usuario_Control{
  	public $dados;
  	public $conn;

  function __construct(){
  	$this->dados = new Usuario_Model();
  	$this->conn = new conexao();

  }

  function userView(){
  	$sql = "SELECT * FROM usuario";
  	$d = $this->conn->Conect();
  	$dados =$d->prepare($sql);
  	$dados->execute();
  	return $dados;

  }

  function add($nome_usr,$senha_usr){
  	$this->dados->setNome_usr($nome_usr);
  	$this->dados->setSenha_usr($senha_usr);
  	$sql = "INSERT INTO usuario(nome_usr,senha_usr) VALUES (:nome_usr,:senha_usr);";
  	$d = $this->conn->Conect();
  	$dados = $d->prepare($sql);
  	$dados->bindValue(":nome_usr", $this->dados->getNome_usr());
  	$dados->bindValue(":senha_usr", $this->dados->getSenha_usr());
  	$dados->execute();
  	header("Location: ../View/Usuario_View.php");

  }
  
  function logar($nome_usr, $senha_usr){
      $this->dados->setNome_usr($nome_usr);
      $this->dados->setSenha_usr($senha_usr);

      $sql = "select id_usr,nome_usr from usuario where nome_usr = :nome_usr and senha_usr = :senha_usr;";

      $d = $this->conexao->Conect();
      $dados = $d->prepare($sql);
      $dados->bindValue(":nome_usr", $this->dados->getNome_usr());
      $dados->bindValue(":senha_usr", $this->dados->getSenha_usr());
      $dados->execute();
      
            if($dados->rowCount() == 0){

                header('Location: ../View/Teste.php');
            }else{
              session_start();
              $user= $dados->fetchAll();
              $_SESSION['id_usr'] = $dados['id_usr'];
              $_SESSION['nome_usr'] = $dados['nome_usr'];


                header('Location: ../View/vendedor/cadastro.php');
            }
   
  
}
}
?>