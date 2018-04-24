<?php session_start(); ?>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Encuesta</title>
	<script>
		var currentPage = 'Encuesta';
	</script>
</head>

<body>

	<nav>
		<a href="home.php"> Home </a>
		<a href="directorio.php"> Directorio </a>
	</nav>

	<div>

    <p>
      <label for="pregunta">Pregunta</label>
      <input id="pregunta" name="pregunta" type="text" placeholder="Pregunta">
    </p>

    <p>
      <label for="categoria-encuesta">Categoría</label>
      <input id="categoria-encuesta" name="categoria-encuesta" type="text"  placeholder="Categoría">
    </p>

    <p>
      <input type="submit" value="Enviar">
    </p>

	</div>

</body>
</html>
