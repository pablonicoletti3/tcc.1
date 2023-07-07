<!DOCTYPE html>
<html>

<head>
	<title>Agendamento para Barbearia</title>
</head>
<link rel="stylesheet" href="style1.css">

<body>
	<form method="post" action="agenda-salvar.php">
		<div>
			<h1>Agendamento para Barbearia</h1>


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
		</div>
	</form>

</body>

</html>