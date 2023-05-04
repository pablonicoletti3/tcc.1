<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="imgs/logo.avif" width="80px">Barber shop </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li> -->
      </ul>
      <?php
      $mensagem = $_GET["msg"] ?? "";
      if($mensagem == "erro"){
        echo "<em class ='text=dange'> Usuario ou senha invalido.</em>";
      }
      ?>
      <form action="login.php" method="post" class="d-flex">
        <input class="form-control me-2" type="email" placeholder="Email">
        <input class="form-control me-2" type="senha" placeholder="senha">
        <button class="btn btn-outline-success me-2" type="submit">Entrar</button>
        <a href="novo-usuario.php" class="btn btn-outline-primary" type="submit">Cadastrar</a>
      </form>
    </div>
  </div>
</nav>  
</body>
</html>