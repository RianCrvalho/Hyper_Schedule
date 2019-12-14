<?php
  include("../Model/Contato_Model.php");
  include("../BD/conexao.php");
  Class Contato_Control{
  	public $dados;
  	public $conn;
  function __construct(){
  	$this->dados = new Contato_Model();
  	$this->conn = new conexao();
  }
  function contView(){
  	$sql = "SELECT * FROM conato";
  	$d = $this->conn->Conect();
  	$dados =$d->prepare($sql);
  	$dados->execute();
  	return $dados;
  }
  function add($id_usr,$nome_cont,$numero_con,$email_cont){
  	$this->dados->setId_usr($id_usr);
  	$this->dados->setNome_cont($nome_cont);
    $this->dados->setNumero_con($numero_con);
    $this->dados->setSenha_usr($email_cont);
  	$sql = "INSERT INTO contato(id_cont,nome_cont,numero_cont,email_cont ) VALUES (:id_usr,:nome_cont,:numero_con,:email_cont);";
  	$d = $this->conn->Conect();
  	$dados = $d->prepare($sql);
  	$dados->bindValue(":id_cont", $this->dados->getNome_usr());
  	$dados->bindValue(":nome_cont", $this->dados->getSenha_usr());
    $dados->bindValue(":numero_cont", $this->dados->getSenha_usr());
    $dados->bindValue(":email_cont", $this->dados->getSenha_usr());
  	$dados->execute();
  	header("Location: ../View/Contato_View.php");
  }
  function del($id_cont){
    $sql = "DELETE FROM contato WHERE id_cont  = :id_cont";
    $d = $this->conn->Conect();
    $dados = $d->prepare($sql);
    $dados->bindValue(":id_cont", $this->dados->getId_cont());
    $dados->execute();
    header("Location: ../View/Contato_View.php");
  }
    function upd($id_cont, $nome_cont,$numero_con,$email_cont){
    $sql = "UPDATE contato  SET nome_cont = :nome_cont, numero_cont = :numero_con, email_cont = :email_cont WHERE id_cont = :id_cont";
    $d = $this->conn->Conect();
    $dados = $d->prepare($sql);
    $dados->bindValue(":id_cont", $id_cont);
    $dados->bindValue(":nome_cont", $nome_cont);
    $dados->bindValue(":numero_con", $numero_con);
    $dados->bindValue(":email_cont", $email_cont);
    $dados->execute();
    header("Location: ../View/Contato_View.php");
  }
}
?>