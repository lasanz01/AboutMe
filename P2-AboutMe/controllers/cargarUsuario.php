<?php
    include ('connect.php');
    include ('../models/usuario.php');

    if (isset($_SESSION['login']) && $_SESSION['login']) {
        $email = $_SESSION['correo'];
       	$usuario = new Usuario($email);
    }

	$mysqli->close();
 ?>
