<?php
    
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $stan = $_POST['stan'];
    $przebieg = $_POST['przebieg'];
    $cena = $_POST['cena'];
    $rocznik = $_POST['rocznik'];
    $rodzaj_paliwa = $_POST['rodzaj_paliwa'];
    $moc = $_POST['moc'];
    $opis = $_POST['opis']

    $con = mysqli_connect('localhost','root','','samochody');
    $qry = "INSERT INTO `samochody`(`marka`, `model`, `stan`, `przebieg`, `cena`, `rocznik`, `rodzaj_paliwa`, `moc`,'opis') VALUES ('$marka','$model','$stan','$przebieg','$cena','$rocznik','$rodzaj_paliwa','$moc','$opis');";

    if (mysqli_query($con, $qry)) {
        echo "ELO";
    }


    mysqli_close($con);
?>