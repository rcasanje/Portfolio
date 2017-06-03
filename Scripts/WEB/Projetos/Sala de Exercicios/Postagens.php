<!doctype html>
<html>
<head>
<?php
	include("PHP/verificar.php");
	if(!isset($_SESSION)) session_start();
	if($_SESSION['User']['idkey'] == "nada"){
		header("Location: Error.php?error=02");
	} else{
		if($_SESSION['User']['permissao'] < 6){
			header("Location: Error.php?error=01");
		}
	}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Postar :: Sala de Exercícios</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/formoid-solid-orange.css">
<script src="Js/jquery.min.js"></script>
<script src="Js/bootstrap.min.js"></script>
</head>
<body class="site">
<header>
	<?php include("PHP/barra_de_menu.php");?>
</header>
<div class="container">
	<h3 style="margin-top:-15px;">Enviar exercícios</h3>
	<?php
  
  	switch($_SESSION['Server']['erro']){
		case -10:
			printf('<div class="alert alert-success" role="alert">Exercício enviado com sucesso!</div>');
			$_SESSION['Server']['erro'] = 0;
			break;
		case -11:
			printf('<div class="alert alert-danger" role="alert">Algo aconteceu de errado com o Banco de Dados! Caso persista envie-nos um ticket.</div>');
			$_SESSION['Server']['erro'] = 0;
			break;
	}
  ?>
	<form action="PHP/enviar_exer.php" method="post">
		<div class="row">
			<div class="col-sm-12">
				<div style="background-color:#BDBDBD;">
					<div class="input-group" style="margin-top:10px;width:100%;"> <span class="input-group-addon" id="basic-addon3" style="width:130px;">Objetiva</span>
						<input type="radio" name="objetiva" required aria-label="Sim" value"sim" style="margin-left:10px; margin-top:7px;" onClick="verificarRadio(1);">
						Sim
						<input type="radio" name="objetiva" aria-label="Sim" value="nao" onClick="verificarRadio(0);">
						Não</span> </div>
				</div>
				<div class="input-group" style="margin-top:10px; width:100%;" id="exercicioEnunciado"> <span class="input-group-addon" id="basic-addon1" style="width:130px; ">Enunciado<br>
					<h6>Máx. 5000 chars</h6>
					</span>
					<textarea type="text" class="form-control" name="enunciado" maxlength="5000" rows="2" required placeholder="" aria-describedby="basic-addon1"></textarea>
				</div>
				<div class="input-group" style="width:100%;" id="exercicioQuestao1"> <span class="input-group-addon" id="basic-addon1" style="width:130px;">Questão 1<br>
					<h6>Máx. 1000 chars</h6>
					</span>
					<textarea type="text" class="form-control" name="questao1" maxlength="1000" rows="2" required placeholder="" aria-describedby="basic-addon1"></textarea>
				</div>
				<div class="input-group" style="width:100%;" id="exercicioQuestao2"> <span class="input-group-addon" id="basic-addon1" style="width:130px;">Questão 2<br>
					<h6>Máx. 1000 chars</h6>
					</span>
					<textarea type="text" class="form-control" name="questao2" maxlength="1000" rows="2" required placeholder="" aria-describedby="basic-addon1"></textarea>
				</div>
				<div class="input-group" style="width:100%;" id="exercicioQuestao3"> <span class="input-group-addon" id="basic-addon1" style="width:130px;">Questão 3<br>
					<h6>Máx. 1000 chars</h6>
					</span>
					<textarea type="text" class="form-control" name="questao3" maxlength="1000" rows="2" required placeholder="" aria-describedby="basic-addon1"></textarea>
				</div>
				<div class="input-group" style="width:100%;" id="exercicioQuestao4"> <span class="input-group-addon" id="basic-addon1" style="width:130px;">Questão 4<br>
					<h6>Máx. 1000 chars</h6>
					</span>
					<textarea type="text" class="form-control" name="questao4" maxlength="1000" rows="2" required placeholder="" aria-describedby="basic-addon1"></textarea>
				</div>
				<div class="input-group" style="width:100%;" id="exercicioQuestao5"> <span class="input-group-addon" id="basic-addon1" style="width:130px;">Questão 5<br>
					<h6>Máx. 1000 chars</h6>
					</span>
					<textarea type="text" class="form-control" name="questao5" maxlength="1000" rows="2" required placeholder="" aria-describedby="basic-addon1"></textarea>
				</div>
				<div class="input-group" style="margin-top:10px; width:100%;"> <span class="input-group-addon" id="basic-addon1" style="width:130px;">Matéria</span>
					<select name="materia" style="height:30px; width:100%;">
						<option value="portugues">Português</option>
						<option value="geografia">Geografia</option>
					</select>
				</div>
				<div class="input-group" style="margin-top:10px; width:100%;"> <span class="input-group-addon" id="basic-addon3" style="width:130px;">Tags
					</h6>
					</span>
					<input class="form-control" name="tags" maxlength="255" required placeholder="Ex.: Português, Desinência, Oração, Verbo, etc. (Max 255 chars)" aria-describedby="basic-addon3" style="height:100%;">
				</div>
			</div>
		</div>
		<div class="submit" style="margin-top:10px;">
			<input type="submit" value="Enviar"/>
		</div>
	</form>
	<h3>Criar postagens</h3>
	<?php
  	switch($_SESSION['Server']['erro']){
		case -12:
			printf('<div class="alert alert-success" role="alert">Post enviado com sucesso!</div>');
			$_SESSION['Server']['erro'] = 0;
			break;
		case -13:
			printf('<div class="alert alert-danger" role="alert">Algo aconteceu de errado com o Banco de Dados! Caso persista envie-nos um ticket.</div>');
			$_SESSION['Server']['erro'] = 0;
			break;
	}
  ?>
	<form action="PHP/enviar_post.php" method="post">
		<div class="row">
			<div class="col-sm-12">
				<div class="input-group" style="width:100%;"> <span class="input-group-addon" id="basic-addon1" style="width:130px;">Título</span>
					<input type="text" class="form-control" name="titulo" maxlength="255" placeholder="Ex.: Orações Subordinadas" aria-describedby="basic-addon1">
				</div>
				<div align="left" style="margin-bottom:-110px;">
					<div class="input-group" style="margin-top:10px; width:80%;" align="left"> <span class="input-group-addon" id="basic-addon2" style="width:130px;">Conteúdo
						<p><small class="caracteres"></small></p>
						</span>
						<textarea class="form-control" id="conteudo" name="conteudo" maxlength="16777215" rows="5" cols="10" placeholder="Conteúdo" aria-describedby="basic-addon2" ></textarea>
					</div>
				</div>
				<div style="margin-bottom:20px; margin-left:80%; width:20%;">
					<button class="btn btn-info" type="button" style="margin-left:3px; width:88px;" onClick="adicionarLinha(1,0);">Oculto</button>
					<button class="btn btn-info" type="button" data-toggle="modal" data-target="#enviarImagem" style="width:88px;">Imagem</button>
					<button class="btn btn-info" type="button" style="margin-left: 3px; width:88px;" data-toggle="modal" data-target="#enviarDocs">Documentos</button>
					<button class="btn btn-info" type="button" style="margin-top:3px; ">Descriçao</button>
					<button class="btn btn-info" type="button" style="margin-left:3px; margin-top:3px;">Descriçao</button>
					<button class="btn btn-info" type="button" style="margin-top:3px;">Descriçao</button>
				</div>
				<div class="input-group" style="margin-top:10px; width:100%;"> <span class="input-group-addon" id="basic-addon1" style="width:130px;">Matéria</span>
					<select name="materia" style="height:30px; width:100%;">
						<option value="Portugues">Português</option>
					</select>
				</div>
				<div class="input-group" style="margin-top:10px; width:100%;"> <span class="input-group-addon" id="basic-addon3" style="width:130px;">Tags</span>
					<input class="form-control" name="tags" maxlength="255" placeholder="Ex.: Português, Desinência, Oração, Verbo, etc." aria-describedby="basic-addon3">
				</div>
			</div>
		</div>
		<div class="submit" style="margin-top:10px;">
			<input type="submit" value="Enviar"/>
		</div>
	</form>
	<div class="modal fade" id="enviarImagem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Enviar imagem</h4>
				</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data">
						Selecione uma imagem: <input name="arquivo" type="file"/><br>
						<input class="btn btn-info" type="submit" value="Enviar imagem">
					</form>
					<?php
					// verifica se foi enviado um arquivo
					if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0){										 
						$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
						$nome = $_FILES['arquivo'][ 'name'];
					 
						// Pega a extensão
						$extensao = pathinfo ($nome, PATHINFO_EXTENSION);
					 
						// Converte a extensão para minúsculo
						$extensao = strtolower ($extensao);
					 
						// Somente imagens, .jpg;.jpeg;.gif;.png
						// Aqui eu enfileiro as extensões permitidas e separo por ';'
						// Isso serve apenas para eu poder pesquisar dentro desta String
						if (strstr('.jpg;.jpeg;.gif;.png', $extensao)){
							// Cria um nome único para esta imagem
							// Evita que duplique as imagens no servidor.
							// Evita nomes com acentos, espaços e caracteres não alfanuméricos
							$novoNome = uniqid ( time () ) . ".".$extensao;
					 
							// Concatena a pasta com o nome
							$destino = 'Upload/Images/' . $novoNome;
					 
							// tenta mover o arquivo para o destino
							if (@move_uploaded_file($arquivo_tmp, $destino)){
								printf('<div class="alert alert-success" role="alert">Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br></div>');
								printf('<div class="alert alert-info" role="alert">Você enviou o arquivo: <strong>' . $_FILES[ 'arquivo' ][ 'name' ] . '</strong><br/>
								Este arquivo é do tipo: <strong > ' . $_FILES[ 'arquivo' ][ 'type' ] . ' </strong ><br />
								Temporáriamente foi salvo em: <strong>' . $_FILES[ 'arquivo' ][ 'tmp_name' ] . '</strong><br />
								Seu tamanho é: <strong>' . $_FILES[ 'arquivo' ][ 'size' ] . '</strong> Bytes<br /><br />
								<img src = "' . $destino . '" /></div>');
							} else {
								printf('<div class="alert alert-warning" role="alert">Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.</div><br>');
							}
						} else{
							printf('<div class="alert alert-warning" role="alert">Você poderá enviar apenas arquivos *.jpg; *.jpeg; *.gif; *.png <br></div>');
						}
					} else{
						printf('<div class="alert alert-success" role="alert">Você não enviou nenhum arquivo!</div>'); 
					}?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="enviarDocs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Enviar imagem</h4>
				</div>
				<div class="modal-body">
					<form method="post" enctype="multipart/form-data">
						Selecione uma imagem: <input name="arquivo" type="file"/><br>
						<input class="btn btn-info" type="submit" value="Enviar imagem">
					</form>
					<?php
					// verifica se foi enviado um arquivo
					if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0){										 
						$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
						$nome = $_FILES['arquivo'][ 'name'];
					 
						// Pega a extensão
						$extensao = pathinfo ($nome, PATHINFO_EXTENSION);
					 
						// Converte a extensão para minúsculo
						$extensao = strtolower ($extensao);
					 
						// Somente imagens, .jpg;.jpeg;.gif;.png
						// Aqui eu enfileiro as extensões permitidas e separo por ';'
						// Isso serve apenas para eu poder pesquisar dentro desta String
						if (strstr('.pdf;.docx;.txt', $extensao)){
							// Cria um nome único para esta imagem
							// Evita que duplique as imagens no servidor.
							// Evita nomes com acentos, espaços e caracteres não alfanuméricos
							$novoNome = uniqid ( time () ) . ".".$extensao;
					 
							// Concatena a pasta com o nome
							$destino = 'Upload/Files/' . $novoNome;
					 
							// tenta mover o arquivo para o destino
							if (@move_uploaded_file($arquivo_tmp, $destino)){
								printf('<div class="alert alert-success" role="alert">Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br></div>');
								printf('<div class="alert alert-info" role="alert">Você enviou o arquivo: <strong>' . $_FILES[ 'arquivo' ][ 'name' ] . '</strong><br/>
								Este arquivo é do tipo: <strong > ' . $_FILES[ 'arquivo' ][ 'type' ] . ' </strong ><br />
								Temporáriamente foi salvo em: <strong>' . $_FILES[ 'arquivo' ][ 'tmp_name' ] . '</strong><br />
								Seu tamanho é: <strong>' . $_FILES[ 'arquivo' ][ 'size' ] . '</strong> Bytes<br /><br />
								<img src = "' . $destino . '" /></div>');
								
								printf('<div onLoad="adicionarLinha(%s, %s)"></div>', 3, $destino);
							} else {
								printf('<div class="alert alert-warning" role="alert">Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.</div><br>');
							}
						} else{
							printf('<div class="alert alert-warning" role="alert">Você poderá enviar apenas arquivos *.pdf; *.docx; *.txt<br></div>');
						}
					} else{
						printf('<div class="alert alert-success" role="alert">Você não enviou nenhum arquivo!</div>'); 
					}?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("PHP/rodape.php"); ?>
</body>
</html>
<script>
$(document).on("input", "#conteudo", function() {
    var limite = 16777215;
    var informativo = "restantes.";
    var caracteresDigitados = $(this).val().length;
    var caracteresRestantes = limite - caracteresDigitados;

    if (caracteresRestantes <= 0) {
        var comentario = $("textarea[name=comentario]").val();
        $("textarea[name=comentario]").val(comentario.substr(0, limite));
        $(".caracteres").text("0 " + informativo);
    } else {
        $(".caracteres").text(caracteresRestantes + " " + informativo);
    }
});

function adicionarLinha(num, path){
	console.log(num + "		" + path)
	if(num == 1){
		var textarea = document.getElementById("conteudo");
		var digitado = textarea.value;
		var addlinha = "...";
		textarea.value = digitado + addlinha;
	} else if(num == 2 || num == 3){
		var textarea = document.getElementById("conteudo");
		var digitado = textarea.value;
		var addlinha = '<a href="saladeexercicios.com.br/' + path + '">Nome do arquivo</a>';
		textarea.value = digitado + addlinha;
	}
}

$("#exercicioEnunciado").addClass("hidden");
$("#exercicioQuestao1").addClass("hidden");
$("#exercicioQuestao2").addClass("hidden");
$("#exercicioQuestao3").addClass("hidden");
$("#exercicioQuestao4").addClass("hidden");
$("#exercicioQuestao5").addClass("hidden");

function verificarRadio(num){
	$("#exercicioEnunciado").removeClass("hidden");
	$("#exercicioQuestao1").removeClass("hidden");
	if(num == 0){
		$("#exercicioQuestao2").addClass("hidden");
		$("#exercicioQuestao3").addClass("hidden");
		$("#exercicioQuestao4").addClass("hidden");
		$("#exercicioQuestao5").addClass("hidden");
		$("[name='questao2']").removeAttr("required");
		$("[name='questao3']").removeAttr("required");
		$("[name='questao4']").removeAttr("required");
		$("[name='questao5']").removeAttr("required");
	} else{
		$("#exercicioQuestao2").removeClass("hidden");
		$("#exercicioQuestao3").removeClass("hidden");
		$("#exercicioQuestao4").removeClass("hidden");
		$("#exercicioQuestao5").removeClass("hidden");
		$("[name='questao2']").attr("required");
		$("[name='questao3']").attr("required");
		$("[name='questao4']").attr("required");
		$("[name='questao5']").attr("required");
		
	}
}
</script>