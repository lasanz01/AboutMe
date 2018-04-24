<?php
    include ('connect.php');
    include ('../models/usuario.php');

    if (isset($_SESSION['login']) && $_SESSION['login']) {
        $USEREMAIL = $_SESSION['USEREMAIL'];
       	$usuario = new Usuario($USEREMAIL);
    }

	$mysqli->close();
 ?>
