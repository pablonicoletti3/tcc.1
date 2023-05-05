<?php

include "cabecalho.php";

include "menu-sistema.php";

?>




<div class="container">

    <div class="row">

        <div class="col">

            <h1>Lista de jogos</h1>

        </div>

    </div>

    <div class="row">

        <div class="col">




 <table border="1">

 <tr>

 <td>Código</td>

<td>Título</td>

<td>Preço</td>

 <td>Ações</td>

 </tr>




 <?php

 include "conexao.php";

$sql_buscar = "select * from jogo";

 $todos_os_jogos = mysqli_query($conexao, $sql_buscar);

 while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :

?>

<tr>

 <td><?php echo $um_jogo["id"]; ?></td>

<td> <?php echo $um_jogo["titulo"]; ?> </td>



 <td>R$ 30,00 <br></td>

 </tr>




 <?php

 endwhile;

 mysqli_close($conexao);

?>

 </table>




</div>

</div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>




</body>




</html>