<?php 
 Class Endereco_Model{
 	public $id_end; 
 	public $id_cont;
 	public $rua;
 	public $cep;
 	public $numero;

 	function __construct(){
 		$this->id_end = 0;
 		$this->id_cont = 0;
 		$this->rua = "sem rua";
 		$this->cep = "sem";
 		$this->numero = "sem numero";
 	}
 	function setId_end($id_end){
 		$this->id_end=$id_end;
 	}
 	function getId_end(){
 		return $this->id_end;
 	}
 	function setId_cont($id_cont){
 		$this->id_cont=$id_cont;
 	}
 	function getId_cont(){
 		return $this->id_cont;
 	}
 	function setRua($rua){
 		$this->rua = $rua;
 	}
 	function getRua(){
 		return $this->rua;
 	}
 	function setCep($cep){
 		$this->cep = $cep;
 	}
 	function getCep(){
 		return $this->cep;
 	}
 	function setNumero_end($numero){
 		$this->numero=$numero;
 	}
 	function getNumero_end(){
 		return $this->numero;
 	}
    
 }


 ?>