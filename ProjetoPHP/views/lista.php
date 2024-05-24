<?php
$conexao = mysqli_connect("localhost", "root", "", "atletas");

// Querey de consulta
$sql = "SELECT `nome`, `email`, `data_nasc`,'cpf', `telefone`, 'senha' `ativo` FROM `novos`";
// mysqli_query() exucuta a query
// mysqli_fetch_all() Traz os resultatos executados pela query
$resultado = mysqli_fetch_all(mysqli_query($conexao, $sql));
// var_dump($resultado);


// ONDE TA DANDO ERRO?
// aqui que ta o erro?


?>