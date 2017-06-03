<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio :: Pão Bocado</title>
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/Index.css">
<link rel="stylesheet" href="CSS/formoid-default-orange.css" type="text/css" />
<script src="Js/jquery.min.js"></script>
<script src="Js/bootstrap.min.js"></script>
</head>
<body>
<header>
  <?php include("PHP/barra_de_menu.php"); ?>
</header>
<div id="Especialidades" style="margin-top:10px;">
  <div class="container" id="cont_espec">
    <center>
      <h3 id="uppercase"> Especialidades</h3>
    </center>
    <div class="row">
      <div class="col-sm-1 col-md-2 col-lg-4">
      	  <img src="Imagens/espec_foto_01.jpg" alt="..." id="redondo">
          <div class="caption">
            <h3>Pão Francês</h3>
          </div>
      </div>
      <div class="col-sm-2 col-md-4">
        <div class="espec_fotos"> <img src="Imagens/espec_foto_02.jpg" alt="..." id="redondo">
          <div class="caption">
            <h3>Massa fina</h3>
          </div>
        </div>
      </div>
      <div class="col-sm-2 col-md-4">
        <div class="espec_fotos"> <img src="Imagens/espec_foto_03.jpg" alt="..." id="redondo">
          <div class="caption">
            <h3>Pão Doce</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="Institucional">
  <div class="container">
    <center>
      <h3 id="uppercase">Institucional</h3>
    </center>
    <div class="row">
      <div class="col-sm-4"> <img src="Imagens/img_institucional01.jpg" alt="..." width="95%"> </div>
      <div class="col-sm-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec tempus elit, et tempus lorem. Integer dui ligula, bibendum vitae orci eget, vulputate luctus turpis. Cras nec tincidunt nulla. Sed venenatis leo eu elit blandit semper. In nec viverra sapien. Proin rhoncus et neque malesuada tempus. Duis pellentesque porttitor nunc vel semper. Donec fermentum erat at magna hendrerit venenatis. Fusce tincidunt arcu in posuere fermentum.</p>
        <p>Bendum, semper purus vitae, rhoncus lorem. Mauris sodales, elit id accumsan venenatis, arcu ante varius nibh, in aliquam dui eros eget justo. Praesent iaculis tempor dolor at imperdiet.</p>
        <p>Suspendisse faucibus neque quis posuere ultrices. Fusce id hendrerit ante. Cras pretium dui augue, vitae faucibus neque hendrerit non. Donec luctus mauris eu turpis malesuada, rhoncus aliquam arcu blandit.</p>
      </div>
    </div>
  </div>
</div>
<div id="Contato">
  <center>
    <h3 id="uppercase">Contato</h3>
  </center>
  <div class="container">
    <div class="row">
      <div class="col-sm-12" center	> 
        <!-- Start Formoid form-->
        <form class="formoid-default-orange" style="font-size:14px;font-family:'Open Sans','Helvetica  Neue','Helvetica',Arial,Verdana,sans-serif;color:#FFFFFF;max-width:920px;min-width:150px" method="post">
          <div class="title">
            <h2>Enviar um e-mail</h2>
          </div>
          <div class="element-input">
            <label class="title">Nome</label>
            <input class="large" type="text" name="nome" required style="color:#000000"/>
          </div>
          <div class="element-email">
            <label class="title">Email</label>
            <input class="large" type="email" name="email" value="" required style="color:#000000"/>
          </div>
          <div class="element-input">
            <label class="title">Assunto</label>
            <input class="large" type="text" name="assunto" required style="color:#000000"/>
          </div>
          <div class="element-textarea">
            <label class="title">Descrição</label>
            <textarea class="medium" name="descricao" cols="20" rows="5" required style="color:#000000"></textarea>
          </div>
          <div class="element-input">
            <label class="title">Captcha</label>
            <input class="large" type="text" name="captcha" required style="color:#000000"/>
          </div>
          <div class="submit">
            <input type="submit" value="Enviar"/>
          </div>
          <p>Outras formas de contato:</p>
        <p>Telefone: (XX) XXXX-XXXX <br>
          Whatsapp: (XX) XXXXX-XXXX <br>
          E-mail: example@provedor.com</p>
        </form>
        <!-- Stop Formoid form-->
      </div>
    </div>
  </div>
</div>
<footer id="Rodape">
  <div class="container">
    <?php include("PHP/rodape.php"); ?>
  </div>
</footer>
</body>
</html>