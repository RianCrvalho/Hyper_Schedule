<?php
Class conexao{
	public $conec;

	function __construct(){
		try {
			$this->conec = new PDO("mysql:hostname=localhost;dbname=agenda","root","root");
			
		} catch (Exception $e) {
			echo "Erro".$e;
			
		}
	}
	function Conect(){
		return $this->conec;
	}
}

 ?>

