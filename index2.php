<!DOCTYPE html>
<html>
<head>
	<title>Agendamento para Barbearia</title>
	<link rel="stylesheet" href="style.css">
</head>
<link rel="stylesheet" href="style1.css">
<body>
    <div>
	<h1>Agendamento para Barbearia</h1>
	<form method="post" action="agendar.php">

		<label>Telefone:</label>
		<input type="tel" name="telefone" required><br>
		<label>Data:</label>
		<input type="date" name="data" required><br>
		<label>Hora:</label>
		<input type="time" name="hora" required><br>
		<br>
	
		<button class="salvar" type="submit" value="Agendar" >Agendar</button> 
		
	</form>
    </div>
   
</body>
</html>
