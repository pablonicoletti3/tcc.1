<div>
<?php
include "cabecalho.php";
include "menu.php";

?>
<link rel="stylesheet" href="index1.css">
<br>
<br>

<h1>Barber shop</h1>
<br>
<br>
<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/american.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/hihg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/mid.jpg" class="d-block w-100" alt="..." >
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

<div class="DESTAQUE">
  <div class="row">
    <div class="col-12 text-center"><h1>Cortes em destaque:</h1></div>
    <div class="col-12  text-center mt-3 mb-3"><p></p></div>
  </div>
  <div class="img">

  </div>

  <div class="row">

  <?php
 
 include "conexao.php";

 $sql_buscar = "select * from jogo";


 $todos_os_jogos = mysqli_query($conexao, $sql_buscar);


 while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :

?>

 <div class="col-md-3 text-center mb-4">
  

 <img src="<?php echo $um_jogo["foto"]; ?>" class="img-fluid" style="object-fit: cover; height: 350px; width: 100%; object-position: top center;">

 <h5 class="mt-3 mb-3"><?php echo $um_jogo["titulo"]; ?></h5>


<a href="<?php echo $um_jogo["video"]; ?>" class="corte1"  >R$ 25,00</a>

</div>
 
 <?php
  endwhile;
  ?>

  </div>
  <div class="row mt-5">
    <div class="col-12 text-center"><h2>Entre em contato conosco!</h2></div>
    <div clas="col-12 text-center"><p></p></div>
  </div>

  <div class="row">
  <form action="inserir-contato.php" method="post">
    <div class="col">
    <div class="mb-2">
  <input type="text" class="form-control" name="nome" placeholder="Nome">
</div>
<div class="mb-2">
  <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
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
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>