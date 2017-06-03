<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/contato.css">
<script src="Js/jquery.min.js"></script>
<script src="Js/bootstrap.min.js"></script>
<title>Mockup :: Design Autoral</title>
</head>
<body>
	<?php include("PHP/barra_de_menu.php"); ?>
	<div class="container">
		<div id="image-mockup" style="float: left; width: 75%;">
			<img src="Imagens/Mockup Blusa 3 sides.png" style="width: 100%;"/>
			<?php 
				if(isset($_GET)){
					printf('<img id="teste" src="%s" style="width: 15%%;"/>', $_GET['path']);
				}
			?>
		</div>
		<div id="controles-mockup" style="float: right; width: 25%">
			<form method="get" action="PHP/script_teste.php">
				<button type="button" class="btn btn-default" onClick="movimentar(1)">Acima</button>
				<button type="button" class="btn btn-default" onClick="movimentar(2)">Abaixo</button>
				<button type="button" class="btn btn-default" onClick="movimentar(3)">Direita</button>
				<button type="button" class="btn btn-default" onClick="movimentar(4)">Esquerda</button>
				<input class="hidden" type="text" name="path" value="<?php if(isset($_GET)) echo($_GET['path']); ?>"/>
				<button type="submit" class="btn btn-info">Aplicar</button>
			</form>
			<form method="get" style="margin-top: 20px;">
				<input class="form-control" type="text" name="path" value="" placeholder="Insira uma imagem da internet"/>
				<button class="btn btn-info" type="submit">Selecionar</button>
			</form>
		</div>
		
	</div>
	<?php include("PHP/rodape.php"); ?>
</body>
<script>
	var posx = -13;
	var posy = 75;
	function movimentar(num){
		var imagem = document.getElementById("teste");
		
		switch(num){
			case 1:
				posy++;
				break;
			case 2:
				posy--;
				break;
			case 3:
				posx--;
				break;
			case 4:
				posx++;
				break;
		}
		imagem.style.marginTop = -posy + "%";
		imagem.style.marginLeft = -posx + "%";
	}
</script>
</html>


<style>
	#teste{
		margin-top: -75%;
		margin-left: 14%;
	}
</style>