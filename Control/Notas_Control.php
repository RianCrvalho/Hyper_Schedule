<?php
  include("../Model/Notas_Model.php");
  include("../BD/conexao.php");
  Class Edereco_Control{
  	public $dados;
  	public $conn;

  function __construct(){
  	$this->dados = new Notas_Model();
  	$this->conn = new conexao();
  }

  function notView(){
  	$sql = "SELECT * FROM notas WHERE id_usr =:id_usr";
  	$d = $this->conn->Conect();
  	$dados =$d->prepare($sql);
    $dados->bindValue(":id_usr", $id_usr);
  	$dados->execute();
  	return $dados;
  }


  function add($id_usr,$data_nota,$nota){
  	$this->dados->setId_usr($id_usr);
  	$this->dados->setData($data_nota);
    $this->dados->setNota($nota);
  	$sql = "INSERT INTO notas(id_usr,data_nota,nota ) VALUES (:id_usr,:data_nota,:nota);";
  	$d = $this->conn->Conect();
  	$dados = $d->prepare($sql);
  	$dados->bindValue(":id_usr", $this->dados->getId_usr());
  	$dados->bindValue(":data_nota", $this->dados->getData());
    $dados->bindValue(":nota", $this->dados->getNota());
  	$dados->execute();
  	header("Location: ../View/Endereco_View.php");
  }

  function del($id_nota){
    $sql = "DELETE FROM notas WHERE id_nota = :id_nata";
    $d = $this->conn->Conect();
    $dados = $d->prepare($sql);
    $dados->bindValue(":id_nota", $id_nota());
    $dados->execute();
    header("Location: ../View/Notas_View.php");
  }

    function upd($id_usr, $id_nota, $data_nota,$nota){
    $sql = "UPDATE notas  SET id_usr = :id_usr, data_nota = :data_nota, nota = :nota WHERE id_nota = :id_nota";
    $d = $this->conn->Conect();
    $dados = $d->prepare($sql);
    $dados->bindValue(":id_usr", $id_usr);
    $dados->bindValue(":data_nota", $data_nota);
    $dados->bindValue(":nota", $nota);
    $dados->bindValue(":id_nota", $id_nota);
    $dados->execute();
    header("Location: ../View/Endereco_View.php");
  }

}
?>
