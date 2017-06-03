<html>
<head>
<?php
include("PHP/verificar.php");
if(!isset($_SESSION)) session_start();
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio :: Sala de Exercícios</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<script src="Js/jquery.min.js"></script>
<script src="Js/bootstrap.min.js"></script>
</head>
<body class="site">
<header>
  	<?php include("PHP/barra_de_menu.php"); ?>
</header>
<div class="container" id="principal">
<section class="jumbotron" id="jumbobox_logo">
 	<h1>Sala de Exercícios</h1>
  	<p>Recursos para aprendizado</p>
</section>
<h2>Últimas postagens</h2>
<div class="row">
  <?php
	    include("PHP/conexao_publicacoes.php");
		
		$tposts;
	    $totalpost = "SELECT id FROM postagens";
		
		if($rows = mysqli_query($conn, $totalpost)){
			$tposts = mysqli_num_rows($rows);
		}
		for($i=$tposts; $i>=$tposts-2; $i--){
			$post = "SELECT id, apelido, titulo, conteudo, materia, tags, data FROM postagens WHERE id='$i'";
			$pegarpost = mysqli_query($conn, $post);
			$mpost = mysqli_fetch_array($pegarpost, MYSQL_ASSOC);
			
			$descricao = substr($mpost['conteudo'], 0, 200);
			$desc = strip_tags($descricao);
			
			if($mpost['conteudo'] != ""){
			printf(
			'
			<div class="col-sm-4">
			  <div class="thumbnail">
				
			  	  <h3>%s</h3>
				  <p>%s...</p>
				  <h6>Posted by: %s</h6>
				  <p><a href="Publicacoes.php?id=%s" class="btn btn-primary" role="button">Ler mais</a></p>
			  </div>
			</div>', $mpost['titulo'], $desc, $mpost['apelido'], $mpost['id']);
			}
		}
	?>
</div>
</div>
<?php include("PHP/rodape.php"); ?>
</body>
</html>
