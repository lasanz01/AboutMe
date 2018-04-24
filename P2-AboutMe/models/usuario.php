<?php

class Usuario {

    private $USEREMAIL;
    private $USERID;
    private $USERNAME;
    private $USERPICTURE;
    private $ISADMIN;
    private $PASSWORD;

    function __construct($USEREMAIL){
        include ('../controllers/connect.php');

        $stmt =  $mysqli->prepare("SELECT * FROM usuario WHERE USEREMAIL LIKE ?");
        $stmt->bind_param("s", $USEREMAIL);
        $stmt->execute();
        $usuario = $stmt->get_result();
        $numRows = $usuario->num_rows;
        if($numRows == 0){
           //No existe usuario
            header("Location:../views/index.php");
        }
        $arr_usuario = $usuario->fetch_array(MYSQLI_ASSOC);

        $this->USEREMAIL =  $USEREMAIL;
        $this->USERID  =  $arr_usuario["USERID"];
        $this->PASSWORD  =  $arr_usuario["PASSWORD"];
        $this->USERNAME  =  $arr_usuario["USERNAME"];
        $this->USERPICTURE = $arr_usuario["USERPICTURE"];
        $this->ISADMIN    =  $arr_usuario["ISADMIN"];

        $mysqli->close();
    }

    function getUserEmail(){
        return $this->USEREMAIL;
    }

    function getPassword(){
        return $this->PASSWORD;
    }

    function getUserName(){
        return $this->USERNAME;
    }

    function getUserId(){
        return $this->USERID;
    }

    function getUserPicture(){
        return $this->USERPICTURE;
    }

    function getIsItAdmin(){
        return $this->ISITADMIN;
    }
}
?>
