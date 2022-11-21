<?php

$link = mysqli_connect('localhost','root','','samochody');

if($link === false){
    die("Nie udalo sie polaczyc. ".mysqli_connect_error());
}
?>