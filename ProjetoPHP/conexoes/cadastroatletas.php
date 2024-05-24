<?php

include_once('conexaobd.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nasc = $_POST['data_nasc'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$senha = md5($_POST['senha']);

$sql = "SELECT cpf FROM atletas.novos WHERE cpf='$cpf'";
$retorno = mysqli_query($conexao, $sql);
if(mysqli_num_rows($retorno) >0){
 echo "CPF JÁ CADASTRADO";
}

else{

   $sql = "INSERT INTO novos (nome, email, data_nasc, cpf, telefone, senha) values 
             ('$nome', '$email', '$data_nasc', '$cpf', '$telefone', '$senha')";

    $resultado = mysqli_query($conexao, $sql);
    echo "Usuário cadastrado";


}



// $sql = "INSERT INTO novos (nome, email, data_nasc, cpf, telefone, senha) values 
           //  ('$nome', '$email', '$data_nasc', '$cpf', '$telefone', '$senha')";

//$resultado = mysqli_query($conexao, $sql);
    //echo "Usuário cadastrado";
         