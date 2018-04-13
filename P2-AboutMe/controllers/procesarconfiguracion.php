<?php session_start();
    include('connect.php');

    $correo = $_SESSION['correo'];


    if (!empty($_REQUEST['contraseña']) && !empty($_REQUEST['confirmar_contraseña'])) {
		if ($_REQUEST['contraseña'] === $_REQUEST['confirmar_contraseña']) {
            $contraseña = htmlspecialchars(trim(strip_tags($_REQUEST["contraseña"])));
            //Hay que guardar la constraseña encriptada
          //  $pass = hash('sha256', $contraseña, false);
            $stmt = $mysqli->prepare("UPDATE usuarios SET password = ? WHERE correo = ? ");
            $stmt->bind_param("ss", $contraseña, $correo);
            $stmt->execute();
            if($stmt != true)
                echo "Error: " . $stmt . "<br>" . $mysqli->error;
        }
    }

    if (isset($_FILES['foto']) && $_FILES['foto']['name'] != '') {
        $foto = $_FILES['foto']['name'];
        $tmp_foto = $_FILES['foto']['tmp_name'];
        $ruta = '../img/Fotos/'.$foto;
        move_uploaded_file($tmp_foto, $ruta);

        $stmt = $mysqli->prepare("UPDATE usuarios SET foto = ? WHERE correo=?");
        $stmt->bind_param("ss", $foto, $correo);
        $stmt->execute();
        if($stmt != true)
            echo "Error: " . $stmt . "<br>" . $mysqli->error;
    }

    if (!empty($_REQUEST['nombreusuario'])) {
		$nombre = htmlspecialchars(trim(strip_tags($_REQUEST["nombreusuario"])));
        $stmt = $mysqli->prepare("UPDATE usuarios SET nombreusuario= ? WHERE correo= ? ");
        $stmt->bind_param("ss", $nombre, $correo);
        $stmt->execute();
        if($stmt != true)
            echo "Error: " . $stmt . "<br>" . $mysqli->error;
    }

    if (!empty($_REQUEST['correo'])) {
		$correouser = htmlspecialchars(trim(strip_tags($_REQUEST["correo"])));

        $stmt = $mysqli->prepare("UPDATE usuarios SET correo= ? WHERE correo= ?");
        $stmt->bind_param("ss", $correouser, $correo);
        $stmt->execute();
        if($stmt != true)
            echo "Error: " . $stmt . "<br>" . $mysqli->error;
        $_SESSION['correo'] = $correouser;
    }

    $mysqli->close();
    header("Location:../views/perfil.php");
    exit;
?>
