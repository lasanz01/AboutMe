<?php session_start();
    include('connect.php');

    $USEREMAIL = $_SESSION['USEREMAIL'];


    if (!empty($_REQUEST['PASSWORD']) && !empty($_REQUEST['confirmar_contraseña'])) {
		if ($_REQUEST['PASSWORD'] === $_REQUEST['confirmar_contraseña']) {
            $PASSWORD = htmlspecialchars(trim(strip_tags($_REQUEST["contraseña"])));
            //Hay que guardar la constraseña encriptada
          //  $pass = hash('sha256', $contraseña, false);
            $stmt = $mysqli->prepare("UPDATE usuario SET PASSWORD = ? WHERE USEREMAIL = ? ");
            $stmt->bind_param("ss", $PASSWORD, $USEREMAIL);
            $stmt->execute();
            if($stmt != true)
                echo "Error: " . $stmt . "<br>" . $mysqli->error;
        }
    }

    if (isset($_FILES['USERPICTURE']) && $_FILES['USERPICTURE']['Name'] != '') {
        $USERPICTURE = $_FILES['USERPICTURE']['name'];
        $tmp_foto = $_FILES['USERPICTURE']['tmp_name'];
        $ruta = '../img/Fotos/'.$USERPICTURE;
        move_uploaded_file($tmp_foto, $ruta);

        $stmt = $mysqli->prepare("UPDATE usuario SET USERPICTURE = ? WHERE correo=?");
        $stmt->bind_param("ss", $USERPICTURE, $USEREMAIL);
        $stmt->execute();
        if($stmt != true)
            echo "Error: " . $stmt . "<br>" . $mysqli->error;
    }

    if (!empty($_REQUEST['USERNAME'])) {
		$nombre = htmlspecialchars(trim(strip_tags($_REQUEST["USERNAME"])));
        $stmt = $mysqli->prepare("UPDATE usuario SET USERNAME= ? WHERE USEREMAIL= ? ");
        $stmt->bind_param("ss", $USERNAME, $USEREMAIL);
        $stmt->execute();
        if($stmt != true)
            echo "Error: " . $stmt . "<br>" . $mysqli->error;
    }

    if (!empty($_REQUEST['USEREMAIL'])) {
		$correouser = htmlspecialchars(trim(strip_tags($_REQUEST["USEREMAIL"])));

        $stmt = $mysqli->prepare("UPDATE usuario SET USEREMAIL= ? WHERE USEREMAIL= ?");
        $stmt->bind_param("ss", $correouser, $USEREMAIL);
        $stmt->execute();
        if($stmt != true)
            echo "Error: " . $stmt . "<br>" . $mysqli->error;
        $_SESSION['USEREMAIL'] = $correouser;
    }

    $mysqli->close();
    header("Location:../views/perfil.php");
    exit;
?>
