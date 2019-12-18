<?php
Class Contato_Model{
	public $id_cont;
	public $id_usr;
	public $nome_cont;
	public $numero_cont;
	public $email_cont;

	function __construct(){
		$this->id_cont = 0;
		$this->id_usr = 0;
		$this->nome_cont = "Sem nome";
		$this->numero_cont = "sem numero";
		$this->endereco = "Sem endereco"; 
		$this->email_cont = "sem email"; 
	}
	function setId_cont($id_cont){
		$this->id_cont = $id_cont;
	}
	function getId_cont(){
		return $this->id_cont;
	}
	function setId_usr($id_usr){
		$this->id_usr = $id_usr;
	}
	function getId_usr(){
		return $this->id_usr;
	}
	function setNumero_cont($numero_cont){
		$this->numero_cont = $numero_cont;
	}
	function getNumero_cont(){
		return $this->numero_cont;
	}
	function setEmail($email_cont){
		$this->email_cont = $email_cont;
	}
	function getEmail(){
		return $this->email_cont;
	}
	function setNome_cont($nome_cont){
		$this->nome_cont= $nome_cont;
	}
	function getNome_cont(){
		return $this->nome_cont;
	}
}

?>