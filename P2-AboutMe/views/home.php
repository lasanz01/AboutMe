<?php session_start(); ?>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<script>
		var currentPage = 'home';
	</script>
</head>

<body>
	<nav>
		<a href="../controllers/logout.php">Logout</a>
		<a href="perfil.php">Mi perfil</a>
	</nav>
	<div>

		<div>
			<!--La página principal incluye un bloc de notas en el medio de la página -->
			<h2> Bloc de notas </h2>
			<a href="">Consultar notas anteriores</a> <!--Todavía no hemos decidido como hacer esto -->
			<textarea name ="nota" rows="15" cols="70">
				¿Que se te pasa por la cabeza hoy?
			</textarea>
			<button type="submit">Guardar nota </button>
		<!--tabla "notas" y cada nota tiene una id, fecha, y usuario que la ha creado,
		cuando se quieren ver notas anteriores, se hace una consulta a la base de datos para sacar todas
		las notas de ese usuario -->
		</div>
			<div>
			<a href="directorio.php" title="Ejemplo de un archivo creado por el usuario"> Directorio1-Categoría Viajes </a>
			<br>
			<a href="" title="Ejemplo de un archivo creado por el usuario"> Directorio2-Categoría Salud </a>
			<br>
			<a href="" title="Ejemplo de un archivo creado por el usuario"> Directorio3-Categoría Compras </a> <br>
			<a href="busqueda.php"> Búsqueda </a>
		</div>
		<div>
			<h2>Crear nuevo directorio </h2>
			<a href="añadirDirectorio.php"><img src="../img/añadir.jpg" alt="añadir" /></a>
		</div>
	</div>


</body>
</html>
