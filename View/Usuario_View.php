<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/estiloTelaLogin.css">
</head>
<body>
 <header align="center">
       <h1>Agenda</h1> 
       <h2>~Login~</h2>
    </header>
    <main>
 <?php 
    include("../Control/Usuario_Control.php");
    $usuario = new Usuario_Control(); 
    if (isset ( $_POST [ 'btn-logar' ])) {
        $nome_usr  =  $_POST ['campo_usuario'];
        $senha_usr  =  $_POST ['campo_senha'];
        $usuario->logar($nome_usr, $senha_usr);
}

if ((@$_SESSION['cadastrado'])=="erro") {
                echo "<div class='alert alert-danger' role='alert'> Usuário ou senha incorreta!</div>";
               
               
 } else if((@$_SESSION['cadastrado'])=="certo"){
    unset($_SESSION['cadastrado']);
 }

  

?>      <div>

        <div id="div_login" class="container">
            <form method="POST">
                <div class="form-group">
                    <label for="user">Usuário:</label>
                    <input type="text" id="user" name="campo_usuario" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="pass">Senha:</label>
                    <input type="password" id="pass" name="campo_senha" class="form-control" required="">
                </div>
                <div id="div_buttons">
                    <button type="submit" id="btn-enviar" name="btn-logar" value="btn1">Enviar</button>
                    &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp&nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp&nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp&nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp&nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                    &nbsp<a href="cadastro.php">Cadastre-se</a>
                </div>
            </form>
        </div>
        </div>
    </main>
    <footer>
        <div align="right">
            <p>2019 &copy; Copyright - Todos os direitos reservados | Calango Voador.</p>
        </div>
    </footer>
</body>
</html>
