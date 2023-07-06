<!DOCTYPE html>
<html>

<head>
	<title>Agendamento para Barbearia</title>
</head>
<link rel="stylesheet" href="style1.css">

<body>
	<div>
		<h1>Agendamento para Barbearia</h1>
		<form method="post" action="agendar.php">

			<label>nome:</label>
			<input type="name" name="nome" required><br>
			<label>Telefone:</label>
			<input type="tel" name="telefone" required><br>
			<label>Data:</label>
			<input type="date" name="data" required><br>
			<label>Hora:</label>
			<input type="time" name="hora" required><br>
			<br>

			<button class="salvar" type="submit" value="Agendar">Agendar</button>


			<?php


			include "agenda-salvar.php";

			$sql_buscar = "select * from agendamento";


			$todos_os_jogos = mysqli_query($conexao, $sql_buscar);


			while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos));

			?>

</body>

</html>