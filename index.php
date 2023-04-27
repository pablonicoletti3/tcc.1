
<?php
include "cabecalho.php";
include "menu.php";
?>

<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/american.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/hihg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/mid.jpg" class="d-block w-100" alt="..." width="200px">
    </div>
    <div class="carousel-item">
      <img src="img/redDead-image.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container mt-5 mb-3">
  <div class="row">
    <div class="col-12 text-center"><h1>Jogos em destaque</h1></div>
    <div class="col-12  text-center mt-3 mb-3"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione nam, sint itaque officiis vitae laboriosam voluptates necessitatibus! Doloribus, consectetur voluptate. Ad temporibus odit porro quam est, consequuntur ratione voluptatibus nulla.</p></div>
  </div>

  <div class="row">

  <?php
  $servidor_bd = "127.0.0.1";
  $usuario_bd = "root";
  $senha_bd = "";
  $banco_de_dados = "nicoletti1";

  $conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

  $sql_buscar = "select * from jogo";

  $todos_os_jogos = mysqli_query($conexao, $sql_buscar);

  while($um_jogo = mysqli_fetch_assoc($todos_os_jogos)):
    ?>
    <div class="col-md-3 text-center mb-4">
    <img src="<?php echo $um_jogo["foto"];?>" class="img-fluid">
    <h5 class="mt-3 mb-3"><?php echo $um_jogo["titulo"];?></h5>
    <a href="<?php echo $um_jogo["video"];?>" class="btn btn-outline-primary">VER MAIS!</a>
  </div>
 
 <?php
  endwhile;
  ?>

  </div>
  <div class="row mt-5">
    <div class="col-12 text-center"><h2>Entre em contato</h2></div>
    <div clas="col-12 text-center"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ipsum, quibusdam libero explicabo facere dolor ducimus perferendis fuga. Quo molestias aliquid aperiam dolores fugit error soluta illum consectetur facere labore.</p></div>
  </div>

  <div class="row">
  <form action="inserir-contato.php" method="post">
    <div class="col">
    <div class="mb-2">
  <input type="text" class="form-control" name="nome" placeholder="Nome">
</div>
<div class="mb-2">
  <input type="tel" class="form-control" name="telefone" placeholder="Nome">
</div>
<div class="mb-2">
  <textarea class="form-control" name="duvida" placeholder="Dúvida" rows="4"></textarea>
</div>
<div class="mb-2 text-center">
  <button type="submit" class="btn btn-success w-25">ENVIAR</button>
</div>
    </div>
  </form>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>