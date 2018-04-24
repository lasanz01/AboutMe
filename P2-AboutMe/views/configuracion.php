<?php session_start(); ?>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title>Configuración</title>
</head>

<body>
<nav>
	<a href="perfil.php">Perfil</a>
</nav>

	<div class="content">
		<div class="contenedor">
			<div class="cabecera">
				<h1 class="text-center"><i class="fa fa-cog"></i> CONFIGURACIÓN</h1>
			</div>
			<div class="formulario">
				<form class="contacto" enctype="multipart/form-data" action="../controllers/procesarConfiguracion.php" method="post">
					<div class="contact-left">
						<div>
							<label> Nombre de usuario:</label>
							<input type='text' name="nombreusuario">
						</div>
						<div>
							<label> Correo:</label>
							<input type='email' name="correo">
						</div>
						<div>
							<label> Nueva contraseña:</label>
							<input type='password' name="contraseña">
						</div>
						<div>
							<label> Confirmar contraseña:</label>
							<input type='password' name="confirmar_contraseña">
						</div>
					</div>
					<div class="contact-right">
						<label>Imagen de perfil:</label>
						<input type="file" name="foto" accept="image/*">
						<input class="myButton" value="Cambiar" type="submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>
