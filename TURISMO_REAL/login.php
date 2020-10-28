<!-- 
* Copyright 2020 SEBASTIAN M.V
-->
<?php
session_start();
include('config.php');


if (isset($_POST['login'])) {
 
    $userrut = $_POST['userrut'];
    $password = $_POST['pass'];
    $query = $connection->prepare("SELECT * FROM usuario u JOIN tipo_usuario tu 
	                               ON u.id_tipo_usr=tu.id_tipo_usr WHERE id_usr=:userrutq");
    $query->bindParam("userrutq", $userrut, PDO::PARAM_STR);
    $query->execute();

	$result = $query->fetch(PDO::FETCH_ASSOC);
}
?>

<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TURISMO REAL</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
</head>
<body class="cover">
	<div class="container-login">
		<p class="text-center" style="font-size: 80px;">
			<i class="zmdi zmdi-account-circle"></i>
		</p>
		<p class="text-center text-condensedLight">Inicia sesión con tu cuenta</p>
		<form method="post" action="" name="login-form">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" required name="userrut" id="userrut" oninput="checkRut(this)">
			    <label class="mdl-textfield__label" for="userrut">Rut (11222333-4)</label>
			</div>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" required type="password" minlength="8" name="pass" id="pass">
			    <label class="mdl-textfield__label" for="pass">Contraseña</label>
			</div>
			<button type="submit" name="login" value="login" id="login" class="mdl-button mdl-js-button mdl-js-ripple-effect" style="color: #3F51B5; float:right;">
				INICIAR SESION <i class="zmdi zmdi-mail-send"></i>
			</button>
		</form>
		<p class="text-center text-condensedLight">
		<?php 
		if (isset($_POST['login'])) {
			if (!$result) {
		      } else {
					$r_password = $result['contrasena_usr'];
					if ($password == $r_password) {
						$_SESSION['user_rut'] = $result['id_usr'];
						$_SESSION['user_nombre'] = $result['nombres_usr'];
						header('Location: home.php');
					} else {
						echo '<p class="error">El RUT y la contraseña no coinciden!</p>';
					}
				}}
		?> </p>
	</div>
</body>
</html>

