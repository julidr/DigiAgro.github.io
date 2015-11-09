<!DOCTYPE html>
<html>
<head>
	<META NAME="Author" CONTENT="P. Lenin Sanchez, Juliana Diaz, Felix Moreno">
	<title>DigiAgro</title>
	<link rel="SHORTCUT ICON" href="ui\images\logo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="ui/CSS/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="ui/CSS/bootstrap-theme.min.css">
	<script type="text/javascript" src="ui/js/jquery.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="ui/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type= "text/css" href="ui/css/style.css">
	<meta charset="UTF-8">
</head>
<body>
	<?php
		session_start();
	?>
	<div id="body">
		<div id="head">
			<img src="ui/images/Banner.png">
		</div>
		<div id="menu">
			<form class="navbar navbar-default">
			
			<ul class="nav navbar-nav" id="nav">
		  		<li id="inicio" role="presentation"><a href="Principal.php"><img src="ui/images/home.png" id="imgS">&nbsp;Inicio</a></li>
		  		<li role="presentation"  class="active"><a href="Quienes.php"><img src="ui/images/who2.png" id="imgS">&nbsp;¿Quienes Somos?</a></li>
				<li role="presentation" id="cerrarS"><a href="index.php"><img src="ui/images/exit.png" id="imgS">&nbsp;Cerrar Sesion</a></li>
			</ul>
			</form>
		</div>
		<div id="menu2">
			<div class="list-group">
  				<a href="CapturaDatos.php"><button type="button" id="m2" class="list-group-item"><img src="ui/images/capture.png" id="imgS">&nbsp;Captura de Datos</button>
 				<a href="DatosHistoricos.php"><button type="button" id="m2" class="list-group-item"><img src="ui/images/history.png" id="imgS">&nbsp;Datos Historicos</button></a>
			</div>
		</div>
		<div id="centro2">
			<center><img src="ui/images/Profiles.png"></center>
		</div>
		<div id="bot">
			<img src="ui/images/bot.png">
		</div>
	</div>

</body>
</html>