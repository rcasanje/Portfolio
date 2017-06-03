<html>
<head>
<?php
	include("PHP/verificar.php");
	if(!isset($_SESSION)) session_start();
	if($_SESSION['User']['idkey'] == "nada"){
		header("Location: Error.php?error=02");
	} else{
		if($_SESSION['User']['permissao'] < 10){
			header("Location: Error.php?error=01");
		}
	}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Página de Teste :: Sala de Exercícios</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<script src="Js/jquery.min.js"></script>
<script src="Js/bootstrap.min.js"></script>
</head>
<body>
<?php include("PHP/barra_de_menu.php"); ?>
<div class="container">
	<form action="" method="post">
		<textarea name="texto" rows="10" cols="70"></textarea>
		<button type="submit">Converter</button>
	</form>
	
	<?php
	if(isset($_POST['texto'])){
		$mystring = $_POST['texto'];
		$findme[0] = 'a) ';
		$findme[1] = 'b) ';
		$findme[2] = 'c) ';
		$findme[3] = 'd) ';
		$findme[4] = 'e) ';
		$findme[5] = '  ';
		$findme[6] = '- ';
		$questoes = ["","","","",""];
		
		$i = 5;
		while($i != 0){
			if($i == 5){
				$posi = strpos($mystring, $findme[$i]);
				if($posi === false){
					$i = 6;
				} else{
					$mystring = substr_replace($mystring, " ", $posi, 2);
					$i = 6;
				}
			}
			if($i == 6){
				$posi = strpos($mystring, $findme[$i]);
				if($posi === false){
					$i = 0;
				} else{
					$mystring = substr_replace($mystring, "", $posi, 2);
					$i = 0;
				}
			}
		}
		
		for($i=0; $i <=4; $i++){
			$posi = strpos($mystring, $findme[$i]);
			if($i < 4){
				$posf = strpos($mystring, $findme[$i+1]);
				$posf -= $posi;
				//printf("Posição final: %s <br>", $posf );
			} else if ($i > 4 and strpos($mystring, $findme[$i+1] === false)){
				$posf = strlen($mystring);
			}

			if ($posi === false) {
				//echo "A string '$findme[$i]' não foi encontrada na string";
			} else {
				$questoes[$i] = substr($mystring, $posi, $posf);
			}
		}
		if($questoes[0] == ""){
			$enunciado = $mystring;
		} else{
			$enunciado = substr($mystring, 0, strpos($mystring, $findme[0]));
		}

		printf('<br><br>%s<br>%s<br>%s<br>%s<br>%s<br>%s', $enunciado, $questoes[0], $questoes[1], $questoes[2], $questoes[3], $questoes[4]);
	}
	?>
	
</div>
</body>
<script>
</script>
</html>