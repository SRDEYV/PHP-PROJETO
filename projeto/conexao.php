<?php
 $hostname = "localhost";
 $bancodedados = "atletas";
 $usuario  = "root";
 $senha = "";

$mysqli = new mysqli( $hostname, $usuario, $senha, $bancodedados);

if($mysqli -> connect_errno){
    echo "Falha na conexão(" . $mysqli->connect_errno .")" . $mysqli->connect_errno;
}
else
    echo "Conectado com sucesso"


?>