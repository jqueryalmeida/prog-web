<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Eventos</title>
		<style type="text/css">
			table.eventos {
				width: 100%;
			}
			table.eventos thead {
				background-color: #eee;
				text-align: left;

			}
			table.eventos thead th {
				border: solid 1px #fff;
				padding: 3px;
			}
			table.eventos tbody td {
				border: solid 1px #eee;
				padding: 3px;
			}
			a, a:hover, a:active, a:visited {
				color: blue;
				text-decoration: underline;
			}
		</style>
	</head>
	<body>
		<h3>Prova Prática</h3>
		<div><a href="index.php?op=new">Adicionar novo Evento</a></div><br>
			<table class="eventos" border="0" cellpadding="0" cellspacing="0">
				<thead>
					<tr>
						<th><a href="?orderby=nome">Nome do Evento</a></th>
						<th><a href="?orderby=numero">Número de Vagas</a></th>
						<th>&nbsp</th>
						<th>&nbsp</th>
					</tr>
				</thead>
			
				<tbody>
					<?php foreach ($eventos as $evento) : ?>
						<tr>	
							<td><a href="index.php?op=show&id=<?php echo $evento->id; ?>"><?php echo htmlentities($evento->nome); ?></a></td>
							<td><?php echo htmlentities($evento->numero); ?></td>
							<td><a href="index.php?op=edit&id=<?php echo $evento->id; ?>">Editar</a></td>
							<td><a href="index.php?op=delete&id=<?php echo $evento->id; ?>" onclick="return confirm('Você tem certeza que quer deletar?');">Deletar</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>		
			</table>
	</body>
</html>