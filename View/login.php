
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="lib/bootstrap.css">
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        header, footer{
            margin: auto;
            text-align: center;
        }
    </style>
</head>
<body>
  <?php
  include ("../Control/Usuario_Control.php");
    if(isset($_POST['btn-logar'])){
        $nome = $_POST['campo_usuario'];
        $senha = $_POST['campo_senha'];
        
        $usuario= new Usuario_Control();
        if(@$_POST['btn-logar']== 'bt1'){
          $nome = $_POST['campo_usuario'];
          $senha = $_POST['campo_senha'];
          $usuario->logar($nome, $senha);
    }
   ?>
    <header>
       <h1>Agenda</h1> 
    </header>
    <main>
        <div id="div_login" class="container">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="user">Usuário</label>
                    <input type="text" id="user" name="campo_usuario" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass">Senha:</label>
                    <input type="password" id="pass" name="campo_senha" class="form-control">
                </div>
                <div id="div_buttons">
                    <button type="submit" id="btn-enviar" name="btn-logar" class="btn btn-success" value="bt1">Enviar</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <div>
            <p>2019 &copy; Copyright - Todos os direitos reservados | Calango Voador.</p>
        </div>
    </footer>