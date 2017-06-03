<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/contato.css">
<script src="Js/jquery.min.js"></script>
<script src="Js/bootstrap.min.js"></script>
<title>Contato :: Design Autoral</title>
</head>

<body>
	<?php include("PHP/barra_de_menu.php"); ?>
	<div class="container well">
		<div id="form_ticket" style="float: left; width: 50%">
			<form action="" method="post">
				<fieldset style="width: 98%">
					<legend>Contato</legend>
					<p><span>Email: </span><input class="form-control" type="text" placeholder="E-mail" required></p>
					<p><span>Assunto: </span><input class="form-control" type="text" placeholder="Assunto" required></p>
					<p><span>Motivo: </span>
						<select required class="form-control">
							<option>Selecione</option>
							<option>Dúvida</option>
							<option>Feedback</option>
							<option>Geral</option>
							<option>Reclamação</option>
						</select>
					</p>
					<p><span>Conteúdo: </span><textarea class="form-control" rows="3" required></textarea></p>
				</fieldset>
			</form>
		</div>
		<div id="conteudo_aside" style="float: right; width: 50%">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et iaculis magna, non sagittis urna. Mauris in malesuada lorem, quis ultricies dui. Nam erat turpis, mollis eu cursus sit amet, posuere id erat. Cras ac consequat ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Cras commodo tincidunt posuere. Nunc eu condimentum enim. Maecenas interdum bibendum odio. Maecenas posuere aliquam sollicitudin. Integer in blandit augue. Pellentesque pharetra, lectus at ultrices gravida, libero eros efficitur tellus, vel pretium sem urna quis eros. Integer neque dui, mattis in tellus eu, scelerisque dapibus ligula. Donec et interdum velit.</p>
		</div>
	</div>
	<?php include("PHP/rodape.php"); ?>
</body>
</html>