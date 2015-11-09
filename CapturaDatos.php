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

	<link rel="stylesheet" type= "text/css" href="ui\css\style.css">
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
		  		<li role="presentation"><a href="Quienes.php"><img src="ui/images/who.png" id="imgS">&nbsp;¿Quienes Somos?</a></li>
				<li role="presentation" id="cerrarS"><a href="index.php"><img src="ui/images/exit.png" id="imgS">&nbsp;Cerrar Sesion</a></li>
			</ul>
			</form>
		</div>
		<div id="menu2">
			<div class="list-group">
  				<button type="button" id="m2" class="list-group-item list-group-item-success"><img src="ui/images/capture2.png" id="imgS">&nbsp;Captura de Datos</button>
 				<a href="DatosHistoricos.php"><button type="button" id="m2" class="list-group-item"><img src="ui/images/history.png" id="imgS">&nbsp;Datos Historicos</button></a>
			</div>
		</div>
		<div id="centro">
				<div id="hum"><?php 
					if ($_SESSION['sen']==0) {
						echo "Humedad";
					}
					if($_SESSION['sen']==1){
						echo "Luz";
					}
					if($_SESSION['sen']==2){
						echo "Temperatura";
					}
				?></div>
			<div id="infoH">
				<?php //Ejemplo aprenderaprogramar.com
					$fp = fopen("ui/txt/prueba.txt", "r");
					$loop = 0; // contador de líneas
						while (!feof($fp)) { // loop hasta que se llegue al final del archivo
						$loop++;
						$line = fgets($fp); // guardamos toda la línea en $line como un string
						// dividimos $line en sus celdas, separadas por el caracter |
						// e incorporamos la línea a la matriz $field
						$field[$loop] = explode ('|', $line);
						// generamos la salida HTML
						if ($_SESSION['sen']==0) {
						     echo $field[$loop][0];
						}
						if ($_SESSION['sen']==1) {
						     echo $field[$loop][1];
						}
						if ($_SESSION['sen']==2) {
						     echo $field[$loop][2];
						}
						$fp++; // necesitamos llevar el puntero del archivo a la siguiente línea
						}
					fclose($fp);
				?>
			</div>
			<div id="botones">
				<form id="datosCap" role="form" method="Post" action="CapturaDatos.php">
					<?php 
						if (isset($_POST["hum"])) {
						$_SESSION['sen']=0;
						}
						if (isset($_POST["luz"])) {
						$_SESSION['sen']=1;
						}
						if (isset($_POST["temp"])) {
						$_SESSION['sen']=2;
						};
					?>
					<button type="submit" id="actu" name="actu" class="btn btn-success"><img src="ui/images/update2.png" id="imgS">&nbsp;Actualizar</button>
					<button type="submit" id="hum" name="hum" class="btn btn-default"><img src="ui/images/hum.png" id="imgS">&nbsp;Humedad</button>
					<button type="submit" id="luz" name="luz" class="btn btn-default"><img src="ui/images/sun.png" id="imgS">&nbsp;Luz</button>
					<button type="submit" id="temp" name="temp" class="btn btn-default"><img src="ui/images/temp.png" id="imgS">&nbsp;Temperatura</button>
				</form>
			</div>
		</div>
		<div id="tablad">
			<div class="panel panel-success">
  				<div class="panel-heading">
    				<h3 class="panel-title" id="nomG"><?php echo $_SESSION['granja'] ?></h3>
  				</div>
  				<div class="panel-body">
    				<center><img id= "tamP" src="ui/images/granja.jpg"></center>
  				</div>
  				<div class="panel-body">
    				Dueño: <?php echo $_SESSION['nombre'] ?>
  				</div>
  				<div class="panel-body">
    				Lugar: <?php echo $_SESSION['lugar'] ?>
  				</div>
  				<div class="panel-body">
    				Fecha: <?php echo date("d")."/".date("m")."/".date("y") ?>
  				</div>
			</div>
		</div>
		<div id="bot">
			<img src="ui/images/bot.png">
		</div>
	</div>

</body>
</html>