<?php

include('conexaobd.php');

if(isset($_POST['email']) || isset( $_POST['senha'])) {

    if(strlen($_POST['email']) == 0){
    echo "Peencha seu e-mail";
    }
    else if(strlen($_POST['senha']) == 0) {
        echo "Prencha a senha";
    }
    else {
        //$email = $mysqli->real_escape_string($_POST['email']);
        //$senha = $mysqli->real_escape_string($_POST['senha']);
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        $sql_code = "SELECT * FROM novos WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conexao->query($sql_code) or die(mysqli_error($conexao));
        
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();
            
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario;
        }
        else {
                echo "Falha ao logar";
            }
        }



}