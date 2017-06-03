<!doctype html>
<html>
<head>
<?php
	include("PHP/champions.php");
	if(isset($_GET['champion'])) $champid = $_GET['champion']; else $champid = 0;
	$nome = $champions[$champid]["Name"];
?>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<script src="Js/jquery.min.js"></script>
<script src="Js/bootstrap.min.js"></script>
<title>Home :: LOE</title>
</head>

<body>
	<div class="container">
	<form action="" method="get">
		<select name="champion" onChange="mudarChampion();">
			<option value="<?php if(isset($_GET['champion'])) echo($_GET['champion']); else echo(0); ?>" ><?php echo($nome); ?></option>
			<?php
				$i = 0;
				foreach($champions as &$value){
					printf('<option value="%s">%s</option>', $i, $value["Name"]);
					$i++;
				}
			?>
		</select>
		<select name="nivel">
			<option value="<?php if(isset($_GET['nivel'])) echo($_GET['nivel']); else echo(1); ?>"><?php if(isset($_GET['nivel'])){ $i=$_GET['nivel']; printf('Nível %s', $i+1); } else{ echo("Nível 1");} ?></option>
			<?php
				for($i=0; $i<=17;$i++){
					printf('<option value="%s">Nível %s</option>', $i, $i+1);
				}
			?>
		</select>
		<div class="checkbox" onClick="atualizarItems();">
			<!-- AP, AD, Ar, RM, VA, Cd, Vida, RVida, -->
			<!-- Lt, PM, RV, RM-->
			<label><input type="checkbox" value="3500" onClick="maxItem(0, 75, 0, 0, 0, 0, 0, 0, 0, 0, 0.20, 0);">A Sedenta por Sangue</label>
			<label><input type="checkbox" value="1" onClick="maxItem(1);">Abatedora</label>
			<label><input type="checkbox" value="2" onClick="maxItem(1);">Abraço de Seraph</label>
			<label><input type="checkbox" value="3" onClick="maxItem(1);">Adaga</label>
			<label><input type="checkbox" value="4" onClick="maxItem(1);">Alfanje das Águas de Sentina</label>
			<label><input type="checkbox" value="5" onClick="maxItem(1);">Ampulheta de Zhonya</label>
			<label><input type="checkbox" value="6" onClick="maxItem(1);">Amuleto da Fada</label>
		</div>
		<button type="submit">Escolher</button>
	</form>
	<?php
		/* Atributos iniciais */
		if(isset($_GET['nivel'])) $nivel = $_GET['nivel']; else $nivel = 0;

		$apinicial = 0; 									// Dano Mágico Inicial
		$adinicial = $champions[$champid]["Atributo"][0]; 	// Dano Físico Inicial
		$arinicial = $champions[$champid]["Atributo"][1];	// Armadura Inicial
		$rminicial = $champions[$champid]["Atributo"][2];	// Resistência Mágica Inicial
		$vainicial = $champions[$champid]["Atributo"][3]; 	// Velocidade de Ataque Inicial
		$trinicial = 0; 									// Tempo de Recarga Inicial
		$acinicial = 0; 									// Acerto Crítico Inicial
		$viinicial = $champions[$champid]["Atributo"][4];	// Vida inicial
		$rginicial = $champions[$champid]["Atributo"][5];	// Regeração de vida inicial
		$vminicial = $champions[$champid]["Atributo"][6];	// Velocidade de Movimento
		if($nome == "Akali"){
			$eninicial = $champions[$champid]["Atributo"][7]; // Energia
			$reinicial = $champions[$champid]["AtributoPN"][8]; // Regeneração de energia
		}

		/* Atributos escaláveis*/
		$adnivel = $champions[$champid]["AtributoPN"][0];
		$arnivel = $champions[$champid]["AtributoPN"][1];
		$rmnivel = $champions[$champid]["AtributoPN"][2];
		$vanivel = $champions[$champid]["AtributoPN"][3];
		$vinivel = $champions[$champid]["AtributoPN"][4];
		$rgnivel = $champions[$champid]["AtributoPN"][5];

		/* Atributos finais*/
		$apfinal = 	0;
		$adfinal = $adinicial+($adnivel*$nivel);
		$arfinal = $arinicial+($arnivel*$nivel);
		$rmfinal = $rminicial+($rmnivel*$nivel);
		$vafinal = ($vainicial*($vanivel*$nivel))+$vainicial;
		$trfinal = 0;
		$acfinal = 0;
		$vmfinal = $vminicial;
		$vifinal = $viinicial+($vinivel*$nivel);
		$rgfinal = $rginicial+($rginicial*$nivel);
		$ltfinal = 0;
		$pmfinal = 0;
		$rvfinal = 0;
		$rpfinal = 0;

		/* Atributos adicionáveis */

		/*------------------------*/

		if($nome == "Akali"){
			$enfinal = $eninicial;
			$refinal = $reinicial;
		}
		if($nome != "Akali"){
			printf('<div id="atributos">
				<table id="tbAtributos">
					<tr>
						<td>Nível</td>
						<td>%s</td>
					</tr>
					<tr>
						<td>Dano Físico</td>
						<td>%s</td>
						<td>Dano Mágico</td>
						<td>%s</td>
					</tr>
					<tr>
						<td>Armadura</td>
						<td>%s</td>
						<td>Resistência Mágica</td>
						<td>%s</td>
					</tr>
					<tr>
						<td>Velocidade de Ataque</td>
						<td>%s</td>
						<td>Tempo de Recarga</td>
						<td>%s</td>
					</tr>
					<tr>
						<td>Acerto Crítico</td>
						<td>%s</td>
						<td>Velocidade de Movimento</td>
						<td>%s</td>
					</tr>
					<tr>
						<td>Vida</td>
						<td>%s</td>
						<td>Regeneração de vida</td>
						<td>%s</td>
					</tr>
					<tr>
						<td>Letalidade</td>
						<td>%s</td>
						<td>Penetração Mágica</td>
						<td>%s</td>
					</tr>
					<tr>
						<td>Roubo de Vida</td>
						<td>%s</td>
						<td>Vampirismo Mágico</td>
						<td>%s</td>
					</tr>
				</table>
			</div>', $nivel+1, $adfinal, $apfinal, $arfinal, $rmfinal, $vafinal, $trfinal, $acfinal, $vmfinal, $vifinal, $rgfinal, $ltfinal, $pmfinal, $rvfinal, $rpfinal);
			//printf('Nível: %s<br>AP: %s || AD: %s<br>AR: %s || RM: %s<br>VA: %s || CD: %s<br>AC: %s || VM: %s<br>Vida: %s || Regen. Vida: %s', $nivel+1, $apfinal, $adfinal, $arfinal, $rmfinal, $vafinal, $trfinal, $acfinal, $vmfinal, $vifinal, $rgfinal);
		} else{
			printf('Nível: %s<br>AP: %s || AD: %s<br>AR: %s || RM: %s<br>VA: %s || CD: %s<br>AC: %s || VM: %s<br>Vida: %s || Regen. Vida: %s<br>Energia: %s || Regen. Energia: %s', $nivel+1, $apfinal, $adfinal, $arfinal, $rmfinal, $vafinal, $trfinal, $acfinal, $vmfinal, $vifinal, $rgfinal, $enfinal, $refinal);
		}
	?>
	</div>
</body>
<script>
	function controls(){
		var maximoItem = 0;
	}
	
	function atualizarChampion(){}
	
	function atualizarItems(){}
	
	function maxItem(){
		console.log(maximoItem);
	}
</script>
</html>