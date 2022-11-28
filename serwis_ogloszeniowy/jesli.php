<?php
require_once "config.php";
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: profil.php");
        exit;
    }else{
        header("location: strona_logowania.php");
    }
?>