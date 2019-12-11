<?php
session_start(); 

include("Control/Usuario_Control.php"); 
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap.css">
</head>
<body>

	<style type="text/css">
		body{margin: 1px 10% 1px 10%}
	</style>
	<h2>Agenda</h2>
	<fieldset>
		<legend>Login</legend>
		<form method="POST">     
       Nome: <input type="text" name="nome_usr">
       Senha: <input type="text" size='10' name="senha_usr">
       <button class='btn btn-info' name="btn" value="btn1"> Entrar </button>
    </form> 
  </fieldset>
  <style>
    .format{
      visibility: hidden;
    }
  </style>
  <script>
     function mostrar(){
      document.getElementsById('form').style.visibility = 'visible';
     }  
</script>
  </body>
</html>

</body>
</html>
