<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Processar os dados do formulário aqui
    
    // Exibir mensagem de confirmação
    $mensagem = "Obrigado por marcar seu corte conosco!";
    echo $mensagem;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Contato</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       
    </form>
</body>
</html>
<h1></h1>