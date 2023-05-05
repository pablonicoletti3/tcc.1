<?php

include "cabecalho.php";

include "menu-sistema.php";

?>




<div class="container">

    <div class="row">

        <div class="col">

            <h1>Lista de usuario</h1>

        </div>

    </div>

    <div class="row">

        <div class="col">




 <table class="table" border="1">

 <tr>

 <td>id </td>

<td>nome</td>

<td>email</td>

<td>Açoes</td>

 </tr>




 <?php

 include "conexao.php";

$sql_buscar = "select * from usuario";

 $todos_os_usuario = mysqli_query($conexao, $sql_buscar);

 while ($um_usuario = mysqli_fetch_assoc($todos_os_usuario)) :

?>

<tr>

 <td><?php echo $um_usuario["id"]; ?></td>

<td> <?php echo $um_usuario["nome"]; ?> </td>

<td> <?php echo $um_usuario["email"]; ?> </td>


<a href="excluir-jogos.php"id=<?php echo $um_usuario["id"]; ?>

 <td> <img src="imgs/1814090_delete_garbage_trash_icon.png" width="30px"> Excluir um usuario
</a>
</td>

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