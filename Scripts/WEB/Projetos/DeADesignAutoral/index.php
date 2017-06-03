<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<script src="Js/jquery.min.js"></script>
<script src="Js/bootstrap.min.js"></script>
<title>Início :: D&A DA</title>
</head>

<body>

<?php include("PHP/barra_de_menu.php"); ?>

<div class="container">
	<div id="banner" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#banner" data-slide-to="0" class="active"></li>
			<li data-target="#banner" data-slide-to="1"></li>
	 	</ol>
	 	
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="Imagens/Logo DEA.jpeg" alt="..." width="100%">
				<!-- <div class="carousel-caption">
					<h3>Bem vindos a D&A Design Autoral</h3>
					<p>Bienvienidos a D&A Design Autoral</p>
				</div> -->
			</div>
		<div class="item">
			<img src="Imagens/banner-design.png" alt="..." width="100%">
		</div>
		</div>

		<a class="left carousel-control" href="#banner" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#banner" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div style="margin-top: 10px; border: 3px solid"></div>
	<div class="row" style="margin-top: 10px;">
		<div class="col-sm-3">
			<div class="thumbnail">
				<img src="Imagens/battlefield4.jpg" width="100%" alt="..." style="height: 150px;">
				<div class="caption">
					<h3>Exemplo 1</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<p><a href="#" class="btn btn-primary" role="button">Ver arte</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="thumbnail">
				<img src="Imagens/DemaciaCity.jpg" alt="..." width="100%" style="height: 150px;">
				<div class="caption">
					<h3>Exemplo 2</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<p><a href="#" class="btn btn-primary" role="button">Ver arte</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="thumbnail">
				<img src="Imagens/PoliceBox.png" alt="..." width="100%" style="height: 150px;">
				<div class="caption">
					<h3>Exemplo 3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<p><a href="#" class="btn btn-primary" role="button">Ver arte</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="thumbnail">
				<img src="Imagens/hogwarts.jpg" alt="..." width="100%" style="height: 150px;">
				<div class="caption">
					<h3>Exemplo 4</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<p><a href="#" class="btn btn-primary" role="button">Ver arte</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("PHP/rodape.php"); ?>
</body>
<script>
</script>
</html>
