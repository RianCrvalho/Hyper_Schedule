<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap.css">
</head>
<body>
	   <style>
        body{margin:1px 10% 1px 10%;}
        }
        header, footer{
            margin: auto;
        }
    </style>

<header align="center">
	<h1>Agenda</h1>
</header>
<main>
	 
	<form method="POST" align="right">
	<button type="submit" id="btn-enviar" name="btn-sair" class="btn btn-info" value="btn2">Voltar</button>
	</form>
	<h2>Anotações:</h2>

<?php
include("../Control/Notas_Control.php");
$Usuario_id = $_SESSION['Usuario_id'];
echo "<h3><p align='right'>Bem vindo Usuario:".@$_SESSION['Usuario_nome']."</p></h3>";

$notas = new Notas_Control();
$dados= $notas->notView($Usuario_id);

if (isset ( $_POST [ 'btn-add' ])) {
        $data_nota  =  $_POST ['campo_data'];
        $nota  =  $_POST ['campo_nota'];
        $notas->add($Usuario_id,$data_nota, $nota);

}
if($_POST['acao'] == "del"){
  $id = $_POST['id'];
  $notas->delNota($id);
  echo "<div class='alert alert-primary' role='alert'>
      This is a primary alert—check it out!
  </div>";
}
if (isset($_POST['btn-sair'])) {
	session_destroy();
	header('Location:login.php');
}
echo "<table class='table table-striped table-hover' border=1 align=center>";
echo "<tr>";
echo "<th class='bg-success'> Data: </th>
<th class='bg-success'> Nota: </th>
<th class='bg-success'> Editar</th><th class='bg-success'> Deletar </th>";
echo "</tr>";
echo "<tr>";
foreach($dados as $d){
    echo "<td>".$d['data_nota']."</td>";
    echo "<td>".$d['nota']."</td>";
    echo "<td><form method='POST'> <a href=?acao=edit&id=".$d['id_nota']." onclick='mostrar()'> Editar </a></form></td>";
    echo "<td> <form method='POST'><button type='submit' id='btn-enviar' name='btn-sair' class='btn btn-info' value='btn2'>Voltar</button>Deletar</a></form></td></td>";
    echo "</tr>";
}
echo "</table>";

?>
<div id="div_login" class="container">
            <form method="POST">
                <div class="form-group">
                    <input type="hidden" name='id' value="<?php echo @$id1;?>";>
                    <label for="date">Data:</label>
                    <input type="date" id="date" name="campo_data" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass">Nota</label>
                    <input type="text" id="pass" name="campo_nota" class="form-control">
                </div>
                <div id="div_buttons">
                    <button type="submit" id="btn-enviar" name="btn-add" class="btn btn-success" value="btn1">adicionar</button>
                </div>
            </form>
        </div>
        <style>
    .format{
      visibility: hidden;
    }
</main>
<footer>
  <div align="center">
            <p>2019 &copy; Copyright - Todos os direitos reservados | Calango Voador.</p>
        </div>
</footer>

</body>
</html>

