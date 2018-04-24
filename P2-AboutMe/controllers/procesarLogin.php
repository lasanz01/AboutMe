<?php  session_start();
    if (!empty($_REQUEST['USEREMAIL']) && !empty($_REQUEST['PASSWORD'])) {
        $USEREMAIL = htmlspecialchars(trim(strip_tags($_REQUEST["USEREMAIL"])));
        $PASSWORD = htmlspecialchars(trim(strip_tags($_REQUEST["contraseña"])));

        include('connect.php');
        //$pass = hash('sha256', $contraseña, false);
        $stmt =  $mysqli->prepare("SELECT USEREMAIL FROM usuario WHERE USEREMAIL LIKE ? AND PASSWORD LIKE ?");
        $stmt->bind_param("ss", $USEREMAIL, $PASSWORD);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $numRows = $resultado->num_rows;

        //Si no existe el usuario
        if ($numRows == 0 ) {
            $_SESSION['login'] = false;
            header("Location:../views/index.php");
            exit;
        }
        //El usuario existe
        else {
            $_SESSION['login'] = true;
            $_SESSION['USEREMAIL'] = $email;
            header("Location:../views/home.php");
        }

        $mysqli->close();
    }

    //Si el usuario es admin le redirijimos a la vista de admin
    if ($email == "admin@gmail.com") { //cambiar, que identifique si es admin o no por el tipo de usuario.
        header("Location:../views/adminHome.php");
    }
    //Si no redirijimos a la pagina inicio para los usuarios logueados
    else {
        header("Location:../views/home.php");
    }

    exit;
?>
