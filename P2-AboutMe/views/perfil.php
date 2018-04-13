<?php session_start(); ?>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perfil</title>
	<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		var currentPage = 'perfil';
	</script>
</head>

<body>

	<?php include ("../controllers/cargarUsuario.php") ?>
	<nav>
		<a href="inicio.php">inicio</a>
		<a href="configuracion.php">configuracion</a>
	</nav>

	<div class="content">
		<div class="user-info">
			<div class="user-info-pic">
				<img id="profilePic" alt="userPic" src="../img/Fotos/<?php
					if (!is_null($usuario->getFoto())) {
						echo 'nofoto.png';
					}

					else {
						echo $usuario->getFoto();
					}
					?>">
				<a class="ajustes" href="configuracion.php"><i class="fa fa-cogs"></i></a>
			</div>
			<table class="list-group">
				<tr>
					<td><i class="fa fa-user-circle-o"> <?php echo $usuario->getNombre(); ?></i></td>
				</tr>
				<tr>
					<td><i class="fa fa-envelope"> <?php echo $usuario->getCorreo(); ?></i></td>
				</tr>
			</table>
			<div class="logo">
				<a href="index.php"><img id="logoPic" alt="logoPic" src="../img/logo3.png"></a>
			</div>
		</div>
	</div>
</body>
</html>
