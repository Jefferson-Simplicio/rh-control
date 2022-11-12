<?php

    include("conexao.php");

    if (isset($_POST['usuario']) || isset($_POST['senha'])){

        if (strlen($_POST['usuario']) == 0 ) {
            echo("PREENCHA O CAMPO USUARIO");
        }else if (strlen($_POST['senha']) == 0 ){
            echo("PREENCHA O CAMPO SENHA");
        }else{

            $usuario = $mysqli->real_escape_string($_POST['usuario']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução da consulta SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if ($quantidade == 1){

                $usuario = $sql_query->fetch_assoc();
                
                if(!isset($_SESSION)){
                    session_start();
                }
            $_SESSION['id'] = $usuario['id'];
            header("Location: cadastro.php");

            }else {
                echo "Falha ao logar! usuario ou senha incorretos!";
            }

        }

    }

?>


<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
    <h1>ENTRAR</h1>
        <p>
            <label>Usuario</label>
            <input type=text name=usuario>
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name=senha>
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>
</html>
