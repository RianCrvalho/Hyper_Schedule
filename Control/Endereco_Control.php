<?php
  include("../Model/Endereco_Model.php");
  include("../BD/conexao.php");
  session_start();
  
  Class Edereco_Control{
  	public $dados;
  	public $conn;

  function __construct(){
  	$this->dados = new Endereco_Model();
  	$this->conn = new conexao();
  }

  function endView($id_cont){
  	$sql = "SELECT * FROM endereco WHERE id_cont =:id_cont";
  	$d = $this->conn->Conect();
  	$dados =$d->prepare($sql);
    $dados->bindValue(":id_cont", $id_cont);
  	$dados->execute();
  	return $dados;
  }


  function add($id_cont,$rua,$numero,$cep){
  	$this->dados->setId_cont($id_cont);
  	$this->dados->setRua($rua);
    $this->dados->setNumero_end($numero);
    $this->dados->setCep($cep);
  	$sql = "INSERT INTO contato(id_cont,rua,numero,cep ) VALUES (:id_cont,:rua_end,:numero_end,:cep_end);";
  	$d = $this->conn->Conect();
  	$dados = $d->prepare($sql);
  	$dados->bindValue(":id_cont", $this->dados->getId_cont());
  	$dados->bindValue(":rua_end", $this->dados->getRua());
    $dados->bindValue(":numero_end", $this->dados->getNumero_end());
    $dados->bindValue(":cep_end", $this->dados->getCep());
  	$dados->execute();
  	header("Location: ../View/Endereco_View.php");
  }

  function del($id_end){
    $sql = "DELETE FROM endereco WHERE id_end = :id_end";
    $d = $this->conn->Conect();
    $dados = $d->prepare($sql);
    $dados->bindValue(":id_end", $id_end);
    $dados->execute();
    header("Location: ../View/Endereco_View.php");
  }

    function upd($id_cont,$id_end, $rua,$numero,$cep){
    $sql = "UPDATE endereco  SET id_cont = :id_cont, rua = :rua, numero = :numero, cep = :cep WHERE id_end = :id_end";
    $d = $this->conn->Conect();
    $dados = $d->prepare($sql);
    $dados->bindValue(":id_cont", $id_cont);
    $dados->bindValue(":rua", $rua);
    $dados->bindValue(":numero", $numero);
    $dados->bindValue(":cep", $cep);
    $dados->bindValue(":id_end", $id_end);
    $dados->execute();
    header("Location: ../View/Endereco_View.php");
  }

}
?>
