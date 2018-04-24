<?php session_start(); ?>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Configuración directorio</title>
	<script>
		var currentPage = 'configDir';
	</script>
</head>

<body>

	<nav>
    <a href="home.php"> Home </a>
    <a href="directorio.php"> Directorio </a>
	</nav>

	<div>

    <p> Visivilidad del direcorio: </p>

    <p>
      <input type="checkbox" id="privado">
      <label for="privado">Privado</label>
    </p>

    <p>
      <input type="checkbox" id="publico">
      <label for="publico">Público</label>
    </p>

    <p>
      <label for="nombreDir">Nombre del direcorio</label>
      <input id="nombreDir" name="nombreDir" type="text" placeholder="Nombre Directorio">
    </p>

    <p>
      <input type="submit" value="Guardar cambios">
    </p>

	</div>

</body>

</html>
