<?php

include "cabecalho.php";

include "menu.php";

?>



<div class="containde">

 <div class="row">

<div class="col-12">

 <h1>Cadastrar novo usuario</h1>

 </div>




 <div class="row">

 <div class="col">

 <form method="post" action="salvar-suario.php">

 <input name="nome" required placeholder="Nome"><br>

 <input name="email" required placeholder="E-mail"><br>

 <input name="senha" required placeholder="Senha"><br>

 <button type="submit" class="btn btn-success">salvar usuário</button>

 </form>

</div>

 </div>




 </div>