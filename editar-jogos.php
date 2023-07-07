<?php
include "cabecalho.php";
include "menu-sistema.php";
include "agenda-salvar.php";

$id = $_GET["id"];
$titulo = $categoria = $foto = $video = "";
include "conexao.php";
$sql_buscar = "select * from jogo where id = $id";
$todos_os_jogos = mysqli_query($conexao, $sql_buscar);
while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
    $titulo = $um_jogo["titulo"];
    $video = $um_jogo["video"];
    $foto = $um_jogo["foto"];
    $preco = $um_jogo["preco"];
endwhile;
mysqli_close($conexao);
?>


<div class="container">

    <div class="row">

        <div class="col-12">

            <h6>Editar corte Cod.: <?php echo $_GET["id"]; ?> </h6>

        </div>

        <div class="col-12">
            <form action="salvar-jogo-editado.php?id=<?php echo $id; ?>" method="post">
                titulo: <input name="titulo" value="<?php echo $titulo; ?>">
                foto: <input name="foto" value="<?php echo $foto; ?>">
                preço: <input name="preco" value="<?php echo $preco; ?>">

                <button type="submit">Salvar</button>


        </div>

    </div>

</div>

<?php
include "agenda-salvar.php";

$id = $_GET["nome"];
$nome = $telefone = $data = $hora = "";
include "conexao.php";
$sql_buscar = "select * from jogo where id = $id";
$todos_os_jogos = mysqli_query($conexao, $sql_buscar);
while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
    $titulo = $um_jogo["nome"];
    $video = $um_jogo["telefone"];
    $foto = $um_jogo["data"];
    $preco = $um_jogo["hora"];
endwhile;
mysqli_close($conexao);
?>