<?php
Class contato{
	public $id_cont;
	public $id_usr;
	public $numero_con;
	public $endereco;
	public $email_cont;

	function __construct(){
		$this->id_cont = 0;
		$this->numero_cont = "sem numero";
		$this->endereco = "Sem endereco"; 
	}
	function setId($id_cont){
		$this->id_cont = $id_cont;
	}
	function getId(){
		retrun $this->id_cont;
	}
	function setIdUsr($id_usr){
		$this->id_usr = $id_usr;
	}
	function getIdUsr(){
		retrun $this->id_usr;
	}
	function setNumero($numero_cont){
		$this->numero_cont = $numero_cont;
	}
	function getNumero(){
		retrun $this->numero_cont;
	}
	function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	function getEndereco(){
		retrun $this->endereco;
	}
	function setEmail($email_cont){
		$this->email_cont = $email_cont;
	}
	function getEmail(){
		retrun $this->email_cont;
	}
}

?>