<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
	<a id="download" download="Imagem - Size A4.png"><canvas width="2480" height="3508" id="canvas">Sorry, no canvas available</canvas></a>
</body>

<script>
var canvas = document.getElementById('canvas'),
ctx = canvas.getContext('2d');
	
var orientacao = 0;
function doCanvas() {
	var img = new Image();
	
	<?php 
		if($_GET['path'] != "" or !isset($_GET)){
			printf('img.src = "%s";', $_GET['path']);
		} else{
			printf('img.src = "../Imagens/PoliceBox.png";');
		}
	?>
	
	
	if (orientacao == 0){
		var awidth = img.width;
		var aheight = img.height;
		var pwidth = 2480;
		var width = img.width;
		var height = img.height;

		width *= pwidth/awidth;
		height *= pwidth/awidth;
	} else {
		var awidth = img.width;
		var aheight = img.height;
		var pwidth = 3508;
		var width = img.width;
		var height = img.height;
		console.log("Teste: " + img.width)
		width = awidth;
		height = aheight;

	}
	
	
    ctx.drawImage(img, 0, 0, width, height);
    
    requestAnimationFrame(doCanvas);
}

CanvasRenderingContext2D.prototype.fillInversedText = function (txt, x, y) {
	var tw = this.measureText(txt).width;
	var th = parseInt(ctx.font, '10');
	th = (th === 0) ? 16 : th;

	var co = document.createElement('canvas');
	co.width = tw;
	co.height = th;

	var octx = co.getContext('2d');
	octx.font = this.font;
	octx.textBaseline = 'top';
	octx.fillText(txt, 0, 0);

	var ddata = this.getImageData(x, y, tw, th);
	var sdata = octx.getImageData(0, 0, tw, th);

	var dd = ddata.data;
	var ds = sdata.data;
	var len = ds.length;

	for (var i = 0; i < len; i += 4) {
		if (ds[i + 3] > 0) {
			dd[i] = (255 - dd[i]);
			dd[i + 1] = (255 - dd[i + 1]);
			dd[i + 2] = (255 - dd[i + 2]);
		}
	}

	this.putImageData(ddata, x, y);
}

ctx.fillRect(0, 0, canvas.width, canvas.height);

function dataURLtoBlob(dataurl) {
    var arr = dataurl.split(','), mime = arr[0].match(/:(.*?);/)[1],
        bstr = atob(arr[1]), n = bstr.length, u8arr = new Uint8Array(n);
    while(n--){
        u8arr[n] = bstr.charCodeAt(n);
    }
    return new Blob([u8arr], {type:mime});
}
	
function download() {
	//var dt = canvas.toDataURL();
	//this.href = dt; //this may not work in the future..
	
	
	var link = document.createElement("a");
    var imgData = canvas.toDataURL({format: 'png', multiplier: 4});
    var strDataURI = imgData.substr(22, imgData.length);
    var blob = dataURLtoBlob(imgData);
    var objurl = URL.createObjectURL(blob);

    imgData.download = "Image.png";

    this.href = objurl;
}
document.getElementById('download').addEventListener('click', download, false);

window.requestAnimationFrame = (function () {
	return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function (callback) {
		window.setTimeout(callback, 1000 / 60);
	};
})();

window.cancelAnimationFrame = (function () {
	return window.cancelAnimationFrame || window.webkitCancelAnimationFrame || window.mozCancelAnimationFrame || function (timPtr) {
		window.clearTimeout(timPtr);
	};
})();

doCanvas();
</script>
</html>


<style>
	body {
	    background-color:#555657;
	    padding:0;
	    margin:0;
	    overflow:hidden;
	    font-family:sans-serif;
	    -webkit-user-select: none;
	    -khtml-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
	}
	canvas {
	    border:1px solid #000;
	    float:left;
	    clear:both;
	}
	#download {
	    clear:both;
	    float:left;
	    cursor:pointer;
	    color:#ccc;
	    padding:3px;
	}
	#download:hover {
	    color:#fff;
	}
	/*
	div, input {
	    font-size:16px;
	    font-family:sans-serif;
	    border:1px solid #000;
	    border-radius: 5px;
	    float:left;
	    padding:5px;
	    width:50px;
	    margin:1px 1px;
	    background-color:#bbb;
	}
	input[type='text'] {
	    font-size:16px;
	    font-weight:bold;
	    width:70px;
	    text-align:center;
	    background-color:#fff;
	    padding-bottom:4px;
	}
	input[type='button'] {
	    font-size:16px;
	    font-weight:bold;
	    width:110px;
	    text-align:center;
	    background-color:#333;
	    color:#eee;
	    padding-bottom:4px;
	}
	input[type='button']:hover {
	    background-color:#fff463;
	    color:#000;
	}
	input[type='range'] {
	    width:100px;
	    margin:0 0 0 10px;
	}
*/
</style>