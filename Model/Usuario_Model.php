<?php
 Class Usuario_Model{
 	private $id_usr;
 	private $nome_usr;
 	private $senha_usr;

 	function __construct(){
 		$this->id_usr = 0;
 		$this->nome_usr ="name";
 		$this->senha_usr = "1234";

 	}
 	function setNome_usr($nome_usr){
 		$this->nome_usr = $nome_usr;
 	}
 	function getNome_usr(){
 		return $this->nome_usr;
 	}
 	function setId_usr($id_usr){
 		$this->id_usr = $id_usr;
 	}
 	function getId_usr(){
 		return $this->id_usr;
 	}
 	function setSenha_usr($senha_usr){
 		$this->senha_usr = $senha_usr;
 	}
 	function getSenha_usr(){
 		return $this->senha_usr;
 	}
 }

  ?>