<?php
$id = $_GET["id"];
$titulo = $_POST ["titulo"];
$foto = $_POST["foto"];
$video = $_POST["video"];

include "conexao.php";

$sql_editar_jogos = "update jogo set titulo='$titulo' , foto='$foto' , video= '$video' where id =$id ";

$um_jogo = mysqli_query($conexao, $sql_editar_jogos);

mysqli_close($conexao);

header("location:listar-jogos.php?msg=sucesso");

?>