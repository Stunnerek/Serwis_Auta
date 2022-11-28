<?php
    
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $stan = $_POST['stan'];
    $przebieg = $_POST['przebieg'];
    $cena = $_POST['cena'];
    $rocznik = $_POST['rocznik'];
    $rodzaj_paliwa = $_POST['rodzaj_paliwa'];
    $moc = $_POST['moc'];

    $con = mysqli_connect('localhost','root','','samochody');
    $qry = "INSERT INTO `samochody`(`marka`, `model`, `stan`, `przebieg`, `cena`, `rocznik`, `rodzaj_paliwa`, `moc`) VALUES ('$marka','$model','$stan','$przebieg','$cena','$rocznik','$rodzaj_paliwa','$moc');";

    if (mysqli_query($con, $qry)) {
        header("location: profil.php");
    }
    
    mysqli_close($con);
?>