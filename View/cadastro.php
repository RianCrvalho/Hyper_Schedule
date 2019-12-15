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
                ?>

                 <div id="div_cadastro" class="container">
            <form method="POST">
                <div class="form-group">
                    <label for="user">Usuário:</label>
                    <input type="text" id="user" name="campo_usuario" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass">Senha:</label>
                    <input type="password" id="pass" name="campo_senha" class="form-control">
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