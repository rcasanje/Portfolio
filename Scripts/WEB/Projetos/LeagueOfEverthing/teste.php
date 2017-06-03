<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Página de Teste :: Sala de Exercícios</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<script src="Js/jquery.min.js"></script>
<script src="Js/bootstrap.min.js"></script>
</head>
<body>
<?php //include("PHP/barra_de_menu.php"); ?>
<div class="container">
	<form action="" method="post">
		<textarea name="texto" rows="10" cols="70"></textarea>
		<button type="submit">Converter</button>
	</form>
	
	<?php
	if(isset($_POST['texto'])){
		$mystring = $_POST['texto'];
		$findme[0] = 'Vida:';
		$findme[1] = 'Dano de Ataque:';
		$findme[2] = 'Velocidade de Ataque:';
		$findme[3] = 'Velocidade de Movimento:';
		$findme[4] = 'Regeneração de Vida:';
		$findme[5] = 'Armadura:';
		$findme[6] = 'Resistência Mágica:';
		$attrib = ["","","","","","",""];
		$attribb = ["","","","","","",""];
		$enunciado = "";
		
		echo($mystring."<br>");
		for($i=0; $i<=6; $i++){
			$posi = strpos($mystring, $findme[$i]);
			if($posi === false){
				echo "A string '$findme[$i]' não foi encontrada<br>";
			} else{
				$lenght = strlen($findme[$i]);
				$attrib[$i] = substr($mystring, $posi+$lenght, 8);
				//echo "A string '$findme[$i]' foi encontrada na posição '$posi'<br>";
			}
		}
		
		for($i=0; $i<=6; $i++){
			$posi = strpos($mystring, $findme[$i]);
			if($posi === false){
				echo "A string '$findme[$i]' não foi encontrada<br>";
			} else{
				$lenght = strlen($findme[$i]);
				$attribb[$i] = substr($mystring, $posi+$lenght+9, 5);
				//echo "A string '$findme[$i]' foi encontrada na posição '$posi'<br>";
			}
		}

		printf("<br><br>%s<br>champions[]['Atributo'][0] = %s; champions[]['AtributoPN'][0] = %s;<br>champions[]['Atributo'][1] = %s; champions[]['AtributoPN'][1] = %s;<br>champions[]['Atributo'][2] = %s; champions[]['AtributoPN'][2] = %s;<br>champions[]['Atributo'][3] = %s; champions[]['AtributoPN'][3] = %s;<br>champions[]['Atributo'][4] = %s; champions[]['AtributoPN'][4] = %s;<br>champions[]['Atributo'][5] = %s; champions[]['AtributoPN'][5] = %s;<br>champions[]['Atributo'][6] = %s;", $enunciado, $attrib[1], $attribb[1], $attrib[5], $attribb[5], $attrib[6], $attribb[6], $attrib[2], $attribb[2], $attrib[0], $attribb[0], $attrib[4], $attribb[4], $attrib[3]);
	}
	?>
	
</div>
</body>
<script>
</script>
</html>