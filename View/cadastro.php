<!DOCTYPE html>
<html lang="pt-br">
<head>
 <title>Cadastro_Agenda</title>
 <link rel="stylesheet" type="text/css" href="../lib/bootstrap.css">
</head>
<body>
    <header align="center">
        <h1>Agenda</h1>
    </header>
    <main>
        <div class="container">
            

            <form method='POST' align="right">
                <button type='submit'  name='btn-sair' class='btn btn-primary'>Sair</button>
            </form>
            <h2>Cadastro</h2>
            
            <div id="div_login">
                <?php 
                include("../Control/Usuario_Control.php");
                $usuario = new Usuario_Control(); 
                       
                if (isset ( $_POST [ 'btn-cadastrar' ])) {
                $nome_usr  =  $_POST ['campo_usuario'];
                $senha_usr  =  $_POST ['campo_senha'];
                $usuario->Cadastrar($nome_usr, $senha_usr);
                }


                if ((@$_SESSION['cadastrado'])=="true") {
                echo "<div class='alert alert-danger' role='alert'> Usuario cadastrado!</div>";
               
                } else if((@$_SESSION['cadastrado'])=="false"){
                    echo "<form method='POST'><div class='alert alert-info' role='alert'> Volte para pagina de login!"."<button type='submit'  name='btn-sair' class='btn btn-link'>Clique aqui</button>"."</div></form>";
                }
                if (isset($_POST [ 'btn-sair' ])) {
                    unset($_SESSION['cadastrado']);
                    session_destroy();  
                    header("Location: login.php");
                }
                
                ?>

                 <div id="div_cadastro" class="container">
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
                    <button type="submit" id="btn-enviar" name="btn-cadastrar" class="btn btn-success" value="btn1">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer align="center">
        <div>
            <p>2019 &copy; Copyright - Todos os direitos reservados | Calango Voador.</p>
        </div>
    </footer>
</body>
</html>