<?php
error_reporting(0);
$link = mysqli_connect('localhost','root','','samochody');
session_start();
   
if($link === false){
    die("Nie udalo sie polaczyc. ".mysqli_connect_error());
};
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$sql = "SELECT created_at FROM users WHERE username = $username;";
$dol = mysqli_query($link, $sql);
?>