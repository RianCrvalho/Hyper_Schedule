<?php 
    function logar($nome_usr, $senha_usr){
        $sql = "select id_usr, nome_usr from usuario where user = :nome_usr and senha = :senha_usr;";

        $d = $conexao->Conect();
        $dados = $d->prepare($sql);
        $dados->bindValue(":nome_usr", $nome_usr);
        $dados->bindValue(":senha_usr", $senha_usr);
        
        try {
            $dados->execute();

            $users = $dados->fetchAll();

            if(count($users) <= 0){
                #header('Location: index.php');
            }else{
                #header("Location: View/Usuário");
            }
        } catch (PDOException $e) {
            echo "Erro ao apagar " . $e->getMessage();
        }
    }

    if(isset($_POST['btn-logar'])){
        $user = $_POST['campo_usuario'];
        $senha = $_POST['campo_senha'];
        
        include 'BD/conexao.php';
        $conexao = new conexao();

        logar($user, $senha, $conexao);
    }
?>
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
                    <button type="submit" id="btn-enviar" name="btn-logar" class="btn btn-success">Enviar</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <div>
            <p>2019 &copy; Copyright - Todos os direitos reservados | Calango Voador.</p>
        </div>
    </footer>
</body>
</html>