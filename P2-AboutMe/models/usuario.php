<?php

class Usuario {

    private $correo;
    private $pass;
    private $nombreusuario;
    private $foto;
    private $tipo;

    function __construct($correo){
        include ('../controllers/connect.php');

        $stmt =  $mysqli->prepare("SELECT * FROM usuarios WHERE correo LIKE ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $usuario = $stmt->get_result();
        $numRows = $usuario->num_rows;
        if($numRows == 0){
           //No existe usuario
            header("Location:../views/index.php");
        }
        $arr_usuario = $usuario->fetch_array(MYSQLI_ASSOC);

        $this->correo      =  $correo;
        $this->pass        =  $arr_usuario["password"];
        $this->nombreusuario      =  $arr_usuario["nombreusuario"];
        $this->foto        = $arr_usuario["foto"];
        $this->tipo        =  $arr_usuario["tipo"];

        $mysqli->close();
    }

    function getCorreo(){
        return $this->correo;
    }

    function getPass(){
        return $this->pass;
    }

    function getNombre(){
        return $this->nombreusuario;
    }

    function getFoto(){
        return $this->foto;
    }

    function getTipo(){
        return $this->tipo;
    }
}
?>
