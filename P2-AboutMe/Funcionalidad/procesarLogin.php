<?php  session_start();
    if (!empty($_REQUEST['email']) && !empty($_REQUEST['contraseña'])) {
        $email = htmlspecialchars(trim(strip_tags($_REQUEST["email"])));
        $contraseña = htmlspecialchars(trim(strip_tags($_REQUEST["contraseña"])));

        include('connect.php');
        $pass = hash('sha256', $contraseña, false);
        $stmt =  $mysqli->prepare("SELECT correo FROM usuarios WHERE correo LIKE ? AND password LIKE ?");
        $stmt->bind_param("ss", $email, $pass);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $numRows = $resultado->num_rows;

        //Si no existe el usuario
        if ($numRows == 0 ) {
            $_SESSION['login'] = false;
            header("Location:../Vistas/index.php");
            exit;
        }
        //El usuario existe
        else {
            $_SESSION['login'] = true;
            $_SESSION['correo'] = $email;
        }

        $mysqli->close();
    }

    //Si el usuario es admin le redirijimos a la vista de admin
    if ($email == "admin@gmail.com") {
        header("Location:admin.php");
    }
    //Si no redirijimos a la pagina inicio para los usuarios logueados
    else {
        header("Location:../Vistas/index.php");
    }

    exit;
?>
