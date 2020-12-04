<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>
			<?php echo htmlentities($title); ?>
		</title>
	</head>
	<body>
		<h3>Adicionar Novo Evento</h3>
		<?php
			if ($errors) {
				echo '<ul class="errors">';
				foreach ($errors as $field => $error) {
					echo '<li>' . htmlentities($error) . '</li>';
				}
				echo '</ul>';
			}
		?>
		
		<form method="post" action="">
				<label for="nome">Nome do Evento: </label><br>
					<input type="text" name="nome" value="<?php echo htmlentities($evento->nome); ?>">
				<br>
				<label for="numero">Número de Vagas: </label><br>
					<input type="text" name="numero" value="<?php echo htmlentities($evento->numero); ?>">
				<br>

			<input type="hidden" name="form-submitted" value="1">
			<input type="submit" value="Editar">
			<button type="button" onclick="location.href='index.php'">Cancelar</button>
		</form>
	</body>
</html>