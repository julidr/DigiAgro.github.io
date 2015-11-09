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
	 <script type="text/javascript" src="ui/js/validar.js"></script>

	<link rel="stylesheet" type= "text/css" href="ui/css/style.css">
	<meta charset="UTF-8">
</head>
<body id="indx">
	<?php
		session_start();
	?>
	<div id="body">
		<center><img src="ui/images/bienvenido.png" id="bien"></center>
		<div id="is">
			<form role="form" id="inS" name="inS" method="Post" action="index.php">
				<?php
					if (isset($_POST["bing"])) {
						$email=$_POST["email"];
						$clave=$_POST["pwd"];
						$_SESSION['var']=0;
						if ($email=="juli.milena@hotmail.com" && $clave=="Erzascarlet") {
							$_SESSION['nombre']="Juliana Diaz";
							$_SESSION['lugar']="Villavicencio";
							$_SESSION['granja']="JuFeLe";
							header('Location: Principal.php');
						}
						else
						{
						   $_SESSION['var']=1;
						};
					};
				?>
			  <div class="form-group">
			    <label for="email">Correo Electronico:</label>
			    <input type="email" class="form-control" id="email" name="email">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Contraseña:</label>
			    <input type="password" class="form-control" id="pwd" name="pwd">
			  </div>
			  <center><button type="submit" class="btn btn-default" id="bing" name="bing">Ingresar</button></center>
			</form>
		</div>
		<?php
			if ($_SESSION['var']==1) {
			 	echo "<div class='alert alert-danger' role='alert' id='AlertIS'>Correo Electronico o Contraseña Incorrecta</div>";
			 	$_SESSION['var']=0;
			 } 
		?>
	</div>
</body>
</html>