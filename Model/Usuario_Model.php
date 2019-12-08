<?php
 Class Usuario_Model{
 	public $id_usr;
 	public $nome_usr;
 	public $senha_usr;

 	function __construct(){
 		$this->id_usr = 0;
 		$this->nome_usr ="name";
 		$this->senha_usr = "1234";

 	}
 	function setNome($nome_usr){
 		$this->nome_usr = $nome_usr;
 	}
 	function getNome(){
 		return $this->nome_usr;
 	}
 	function setId($id_usr){
 		$this->id_usr = $id_usr;
 	}
 	function getId(){
 		return $this->id_usr;
 	}
 	function setSenha($senha_usr){
 		$this->senha_usr = $senha_usr;
 	}
 	function getSenha(){
 		return $this->senha_usr;
 	}
 }


  ?>