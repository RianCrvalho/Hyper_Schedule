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
	<button type="submit" id="btn-enviar" name="btn-sair" class="btn btn-info" value="btn2">Sair</button>
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


if(isset($_POST['btn-del'])){
  $id = $_POST[$d['value']];
  $notas->delNota($id);
  echo "<div class='alert alert-primary' role='alert'>
      Apagado!
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
    echo "<td><a href=?acao=edit&id=".$d['id_nota']."onclick='mostrar()'> Editar </a></td>";

    echo "<td> <form method='POST'><button type='submit' name='btn-del' value=".$d['id_nota']." class='btn btn-link'>Deletar</button></form></td></td>";
    echo "</tr>";
}
echo "</table>";

?>
<div id="div_login" class="container">
            <form method="POST">
                <div class="form-group">
                    <input type="hidden" name="campo_id" value="<?php echo @$id1;?>">
                    <label for="date">Data:</label>
                    <input type="date" id="date" name="campo_data" class="form-control" value="<?php echo @$data1;?>" required>
                </div>
                <div class="form-group">
                    <label for="pass">Nota</label>
                    <textarea  id="pass" name="campo_nota" class="form-control" required>
                        </textarea>
                </div>
                <div id="div_buttons">
                    <button type="submit" id="btn-enviar" name="btn-add" class="btn btn-success" value="btn1">adicionar</button>
                    <button align='right' type="submit" id="btn-enviar" name="btn-add" class="btn btn-success" value="btn1">Atualizar</button>
                    <p></p>
                    <p></p>
                </div>
            </form>
            <h2>Contatos:</h2>
        </div>
        <?php
include("../Control/Contato_Control.php");
$contato = new Contato_Control();
$dados = $contato->contView($Usuario_id);
if($_GET['acao'] == "edit"){
    echo "edioyoyyoyoyo";
}
if (isset ( $_POST [ 'btn-ad' ])) {
        $nome_cont  =  $_POST ['campo_nome'];
        $numero_cont  =  $_POST ['campo_numero'];
        $email_cont = $_POST['campo_email'];
        $contato->addCont($Usuario_id,$nome_cont, $numero_cont,$email_cont);
}

echo "<table class='table table-striped table-hover' border=1 align=center>";
echo "<tr>";
echo "<th class='bg-success'> Nome: </th>
<th class='bg-success'> Numero:</th>
<th class='bg-success'> Email:</th>
<th class='bg-success'> Editar</th><th class='bg-success'> Deletar </th>";
echo "</tr>";
echo "<tr>";
foreach($dados as $d){
    echo "<td>".$d['nome_cont']."</td>";
    echo "<td>".$d['numero_cont']."</td>";
    echo "<td>".$d['email_cont']."</td>";
    echo "<td><a href=?acao=edit&id=".$d['id_cont']."onclick='mostrar()'> Editar </a></td>";

    echo "<td> <form method='POST'><button type='input' name='btn-del' value=".$d['id_cont']." class='btn btn-link'>Deletar</button></form></td></td>";
    echo "</tr>";
}
echo "</table>";

?>
<div id="div_login" class="container">
            <form method="POST">
                <div class="form-group">
                    <input type="hidden" name="campo_id">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="campo_nome" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="numero">Numero:</label>
                    <input type="text" id="pass" name="campo_numero" class="form-control" required>   
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="pass" name="campo_email" class="form-control">
                    
                </div>
                <div id="div_buttons">
                    <button type="submit" id="btn-enviar" name="btn-ad" class="btn btn-success" value="btn1">adicionar</button>
                    <button align='right' type="submit" id="btn-enviar" name="btn-add" class="btn btn-success" value="btn1">Atualizar</button>
                </div>
            </form>
        </div>

</main>
<footer>
  <div align="center">
            <p>2019 &copy; Copyright - Todos os direitos reservados | Calango Voador.</p>
        </div>
</footer>

</body>
</html>

