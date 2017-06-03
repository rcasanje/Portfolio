<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio :: Divulgatube</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<script src="Js/jquery.min.js"></script>
<script src="Js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#menu a").click(function( e ){
			e.preventDefault();
			var href = $( this ).attr('href');
			$("#content").load( href +" #content");
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		var content = $('#content');

		//pre carregando o gif
		loading = new Image(); loading.src = 'loading.gif';
		$('#menu a').live('click', function( e ){
			e.preventDefault();
			content.html( '<img src="loading.gif" />' );

			var href = $( this ).attr('href');
			$.ajax({
				url: href,
				success: function( response ){
					//forçando o parser
					var data = $( '<div>'+response+'</div>' ).find('#content').html();

					//apenas atrasando a troca, para mostrarmos o loading
					window.setTimeout( function(){
						content.fadeOut('slow', function(){
							content.html( data ).fadeIn();
						});
					}, 500 );
				}
			});

		});
	});
	</script>
</head>
<body>
<header>
  <?php include("PHP/barra_de_menu2.php");?>
</header>
<div class="container" style="margin-top:30px;">
  <nav class="navbar" style="background-color:#D3D3D3; color:#000000;">
    <div class="navbar-header">
      <ul class="nav navbar-nav navbar-left" id="menu">
        <li><a href="PHP/fazer_pedido.php">Fazer um pedido</a></li>
        <li><a href="PHP/checar_pedido.php">Checar pedidos</a></li>
        <li><a href="PHP/meus_dados.php">Meus dados</a></li>
        <li><a href="PHP/configs.php">Configurações</a></li>
        <li><a href="Teste.html">Configurações</a></li>
      </ul>
    </div>
  </nav>
  <div id="content">
    <h1>Bem Vindo!</h1>
    <p>Essa eh a home desse nome pseudo-site.</p>
  </div>
</div>
<footer></footer>
</body>
</html>
