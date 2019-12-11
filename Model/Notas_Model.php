<?php
 Class Notas_Model{
 	public $id_nota;
 	public $id_usr;
 	public $data_nota;
 	public $nota;

 	function __construct(){
 		$this->id_nota = 0;
 		$this->id_usr = 0;
 		$this->data_nota= "0000/00/00";
 		$this->nota= "sem nota";
 	}
 	function setId_nota($id_nota){
 		$this->id_nota = $id_nota;
 	}
 	function getId_nota(){
 		return $this->id_nota;
 	}
	function setId_usr($id_usr){
		$this->id_usr = $id_usr;
	}
	function getId_usr(){
		retrun $this->id_usr;
	} 	
 	function setData($data_nota){
 		$this->data_nota= $data_nota;
 	}
 	function getData(){
 		return $this->data_nota;
 	}
 	function setNota($nota){
 		$this->nota = $nota;
 	}
 	function getNota(){
 		return $this->nota;
 	}

 }



  ?>