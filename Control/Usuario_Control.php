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

  function Cadastrar($nome_usr,$senha_usr){
     $this->dados->setNome_usr($nome_usr);
      $this->dados->setSenha_usr($senha_usr);

      $sql = "SELECT id_usr,nome_usr from usuario where nome_usr = :nome_usr and senha_usr = :senha_usr;";
      $d = $this->conn->Conect();
      $dados = $d->prepare($sql);
      $dados->bindValue(":nome_usr", $this->dados->getNome_usr());
      $dados->bindValue(":senha_usr", $this->dados->getSenha_usr());
      $dados->execute();
      
       $user = $dados->fetchAll();
       if(count($user) == 0){
        $this->dados->setNome_usr($nome_usr);
    $this->dados->setSenha_usr($senha_usr);
    $sql = "INSERT INTO usuario(nome_usr,senha_usr) VALUES (:nome_usr,:senha_usr);";
    $d = $this->conn->Conect();
    $dados = $d->prepare($sql);
    $dados->bindValue(":nome_usr", $this->dados->getNome_usr());
    $dados->bindValue(":senha_usr", $this->dados->getSenha_usr());
  
            try {
                $dados->execute();
                $_SESSION['cadastrado'] = "false";
                header("Location: ../View/cadastro.php");
                return true;
            } catch (PDOException $e){
                echo "Erro:".$e->getMessage();
                $_SESSION['cadastrado'] = "true";
                return false;
            }}else{
              
              $miau = $user[0];
              $_SESSION['cadastrado'] = "true";
            }

  }
  
  function logar($nome_usr, $senha_usr){
      $this->dados->setNome_usr($nome_usr);
      $this->dados->setSenha_usr($senha_usr);

      $sql = "SELECT id_usr,nome_usr from usuario where nome_usr = :nome_usr and senha_usr = :senha_usr;";
      $d = $this->conn->Conect();
      $dados = $d->prepare($sql);
      $dados->bindValue(":nome_usr", $this->dados->getNome_usr());
      $dados->bindValue(":senha_usr", $this->dados->getSenha_usr());
      $dados->execute();
      
       $user = $dados->fetchAll();
            
            if(count($user) == 0){
                $_SESSION['cadastrado'] = "erro";
                header('Location:login.php');
            }else{
             $miau = $user[0];
              $_SESSION['Usuario_id'] = $miau['id_usr'];
              $_SESSION['Usuario_nome'] = $miau['nome_usr'];
                $_SESSION['cadastrado'] = "certo";

                header('Location: ../View/Usuario_View.php');
            }
   
  
  
}
}
?>