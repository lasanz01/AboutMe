<?php

    $hostmane = "localhost";
    $user = "admin";
    $password = "AdminAboutMe";
    $bd = "aboutme";

    $mysqli = new mysqli($hostmane, $user, $password, $bd);
    $mysqli->set_charset("utf8");

    if ($mysqli->connect_error) {
    		die("Connection failed: " . $mysqli->connect_error);
    }
?>
