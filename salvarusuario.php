<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$servidor_bd = "127.0.0.1";

$usuario_bd = "root";

$senha_bd = "";

$banco_de_dados = "nicoletti1";


$conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

$sql_inserir_usuario = " insert into usuario (nome, email, senha) VALUES ('$nome','$email','$senha')";

$um_usuario= mysqli_query($conexao, $sql_inserir_usuario);


mysqli_close($conexao);

?>