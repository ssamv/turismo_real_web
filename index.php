
<?php

if (isset($_POST['go_login'])) {
	header('Location: TURISMO_REAL/login.php');
}
 
if (isset($_POST['go_registro'])) {
	header('Location: TURISMO_REAL/registro.php');
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TURISMO REAL</title>
	<link rel="stylesheet" href="TURISMO_REAL/css/normalize.css">
	<link rel="stylesheet" href="TURISMO_REAL/css/sweetalert2.css">
	<link rel="stylesheet" href="TURISMO_REAL/css/material.min.css">
	<link rel="stylesheet" href="TURISMO_REAL/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="TURISMO_REAL/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="TURISMO_REAL/css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="TURISMO_REAL/js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="TURISMO_REAL/js/material.min.js" ></script>
	<script src="TURISMO_REAL/js/sweetalert2.min.js" ></script>
	<script src="TURISMO_REAL/js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="TURISMO_REAL/js/main.js" ></script>
</head>
<body class="cover">
	<div class="container-login">
		<p class="text-center" style="font-size: 80px;">
			<i class="zmdi zmdi-account-circle"></i>
		</p>
		<p class="text-center text-condensedLight">BIENVENIDO A TURISMO REAL</p>
		<p class="text-center text-condensedLight"></p>
		<form method="post" action="" name="index-form">
			<button type="submit" name="go_login" value="go_login" id="go_login" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; float:right;">
				INICIAR SESION<i class="zmdi zmdi-mail-send"></i>
			</button>
			<br><br><br>
			<p class="text-center text-condensedLight">DESEAS REALIZAR RESERVAS EN NUESTRO SISTEMA? QUE ESPERAS PARA REGISTRARTE!</p>
			<button type="submit" disabled name="go_registro" value="go_registro" id="go_registro" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; float:right;">
			    REGISTRARME<i class="zmdi zmdi-mail-send"></i>
			</button>
		</form>
	</div>
</body>
</html>