<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap.css">
</head>
<body>
	<style type="text/css">
		body{margin: 1px 10% 1px 10%}
	</style>
	<h2>Agenda</h2>
	<fieldset>
		<legend>Dados</legend>
	</fieldset>
<?php
include_once("../Control/Usuario_Control.php");
$usuario = new Usuario_Control();
$dados= $usuario->userView();
if(@$_POST['btn']== 'btn1'){
  	$nome_usr = $_POST['nome_usr'];
 	$senha_usr = $_POST['senha_usr'];
 	$usuario->add($nome_usr, $senha_usr);
}
echo "<table class='table table-striped table-hover' border=1 align=center>";
echo "<tr>";
echo "<th class='bg-success'> Nome: </th>
<th class='bg-success'> Senha: </th>
<th class='bg-success'> Editar</th><th class='bg-success'> Deletar </th>";
echo "</tr>";
echo "<tr>";
foreach($dados as $d){
    echo "<td>".$d['nome_usr']."</td>";
    echo "<td>".$d['senha_usr']."</td>";
    echo "<td> <a href=?acao=edit&id=".$d['id_usr']." onclick='mostrar()'> Editar </a></td>";
    echo "<td> <a href=?acao=del&id=".$d['id_usr']."> Deletar </a></td></td>";
    echo "</tr>";
}
echo "</table>";
 ?> <fieldset>
		<legend>Cadrastro</legend>
		<form method="POST">     
       Nome: <input type="text" name="nome_usr" value="">
       Senha: <input type="text" size='10' name="senha_usr" value="" >
       <button class='btn btn-info' name="btn" value="btn1"> Cadastrar </button>
       <button class='btn btn-success' name="btn" value="btn2"> Atualizar </button>
    </form> 
  </fieldset>
  <style>
    .format{
      visibility: hidden;
    }
  </style>
  <div id="form" class="format alert alert-danger">
      Dados Cadastrados com Sucesso!!
  </div>
  <script>
     function mostrar(){
      document.getElementsById('form').style.visibility = 'visible';
     }  
</script>
  </body>
</html>
