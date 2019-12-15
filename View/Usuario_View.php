<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap.css">
</head>
<body>
	<fieldset>Agenda</fieldset>
<?php
include("../Control/Usuario_Control.php");
$cliente = new Usuario_Control();
$dados = $cliente->userView();
 
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
?>

</body>
</html>

