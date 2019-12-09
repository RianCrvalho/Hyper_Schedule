<?php
Class conexao{
	public $conec;

	function __construct(){
		try {
			$this->conec = new PDO("mysql:hostname=localhost;dbname=agenda","root","");
			
		} catch (Exception $e) {
			echo "Nao foi home".$e;
			
		}
	}
	function Conect(){
		return $this->conec;
	}
}

 ?>

