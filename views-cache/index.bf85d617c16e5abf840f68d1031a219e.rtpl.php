<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<title>SL BRASIL - EDI</title>
<link rel="stylesheet" href="/res/css/style.css" />
<script type="text/javascript" src="res/javascript/funcoes.js"></script>
</head>
<body id="index">
	<div id="header">
		<img id="logo-topo" src="/res/images/logo.jpg" />
	</div>
	<div id="welcome">
		<h1>Welcome to SL Brasil - EDI</h1>
	</div>
	<div id="div-file">
		<form id="form-file" enctype="multipart/form-data" method="post" action="/report">
			<input id="file" name="file" type="file" onchange='change()' accept=".txt">
  			<p id="filename">Drag your file here or click in this area</p>
			<button id="generate" type="submit" disabled="disabled" 
					onmouseover='hoverButton()' 
					onmouseout='outButton()'
					onmousedown='pressButton()'
					onmouseup='outButton()'
			>
				Generate Report
			</button>
		</form>
	</div>
	
	
</body>
</html>