<?php session_start(); ?>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Directorio</title>
	<script>
		var currentPage = 'directorio';
	</script>
</head>

<body>
	<nav>
    <a href="home.php"> Home </a>
	</nav>
	<div>
    <div>
    <img src="../img/paisaje.png" alt="imagenEjemplo">
    </div>

    <div>
    <!--El usuario añade una pequeña descripción de su foto/contenido -->
    <h2> Descripción del contenido </h2>
    <p> Que bonitas han sido estas vacaciones en Puerto Rico. He nadado con tiburones, bailado alrededor del fuego
    y bebido como si no huviese un mañana. ¡Que ganas de volver! </p>
    </div>

		<div>
    <h2>Sección de comentarios </h2>
    <!--Se extrae el nombre de usuario del que ha hecho el comentario y se añade junto con su comentario -->
    <p> carmencita234 dice - Que envidia me das, algunas aquí trabajando y tu de vacaciones! <br>
    <p> jose1994 dice - Yo estuve allí hace dos semanas y me encantó! <br>
		</div>

	</div>

</body>
</html>
