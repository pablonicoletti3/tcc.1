
<?php

include "conexao.php";

$nome = $_POST["nome"];

$telefone= $_POST["telefone"];

$data = $_POST["data"];

$hora = $_POST["hora"];


$sql_inserir_usuario = "insert into agendamento (nome, telefone, data, hora, ) values('$nome','$telefone', '$data', '$hora','" . "')";


$um_usuario = mysqli_query($conexao, $sql_inserir_usuario);

echo "alalalalla";


mysqli_close($conexao);

?>