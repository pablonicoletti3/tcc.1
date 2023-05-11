<!DOCTYPE html>
<html>
<head>
	<title>Agendamento para Barbearia</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <div>
	<h1>Agendamento para Barbearia</h1>
	<form method="post" action="agendar.php">
		<label>Nome:</label>
		<input type="text" name="nome" required><br>
		<label>Email:</label>
		<input type="email" name="email" required><br>
		<label>Telefone:</label>
		<input type="tel" name="telefone" required><br>
		<label>Data:</label>
		<input type="date" name="data" required><br>
		<label>Hora:</label>
		<input type="time" name="hora" required><br>
		<label>Serviço:</label>
		<select name="servico" required>
			<option value="">Selecione um serviço</option>
			<option value="corte">Corte de Cabelo</option>
			<option value="barba">Barba</option>
			<option value="corte-e-barba">Corte de Cabelo e Barba</option>
		</select><br>
		<label>Observações:</label>
		<textarea name="observacoes"></textarea><br>
		<input type="submit" value="Agendar">
	</form>
    </div>
   
</body>
</html>
