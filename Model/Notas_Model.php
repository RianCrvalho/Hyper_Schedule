<?php
 Class Notas_Model{
 	public $id_nota;
 	public $data_nota;
 	public $nota;

 	function __construct(){
 		$this->id_nota = $id_nota;
 		$this->data_nota= $data_nota;
 		$this->nota= $nota;
 	}
 	function setId($id_nota){
 		$this->id_nota = $id_nota;
 	}
 	function getId(){
 		return $this->id_nota;
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