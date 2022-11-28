<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Serwis Samochodowy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<header>
    <div id="baner"><h1>Serwis</h1></div>
    <a href="jesli.php"><div id="ikona"></div></a>
</header>
<div id="container">
<div id="lewygorny">
<form action="" method="POST"></form><!-- Wybierz miejsce akcji -->
    <div id="szukaj">
        <input type="text" placeholder="Search..." name="search">

    </div>
</div> 

<div id="głowny">
    <?php
        $a= new mysqli('localhost','root','','samochody');
    
        if  ($b=$a->query("SELECT * FROM samochody;"))
        {
            while($c=$b->fetch_assoc())
            {
                print '<div class="wynik"><div class="zdjecie"></div><p>'.$c['marka'].' '.$c['model'].'<br> Stan: '.$c['stan'].' Cena: '.$c['cena'].'PLN</p></div>';
            }
            $b->close();
        }
        $a->close();
        ?>
    </div>
    <div id="lewydolny">
        <table style="border-collapse: collapse;">
          <tr><td><b>Rocznik</b><td><input type="text" maxlength="4" width=""  name="rokod" placeholder="OD"><td></td><td><input type="text" maxlength="4"  name="rokdo" placeholder="DO"></td></tr>
          <tr><td><b>Marka:</b></td><td><input type="text" maxlength="20"  name="marka"></td></tr>
          <tr><td><b>Stan:</b></td><td><input type="text" maxlength="15"  name="stan"></td></tr>
          <tr><td><b>Przebieg</b> </td><td><input type="text" maxlength="5"  name="przebod" placeholder="OD"></td><td></td><td><input type="text" maxlength="10"  name="przebdo" placeholder="DO"></td></tr>
          <tr><td><b>Cena</b> </td><td><input type="text" maxlength="6"  name="cenaod" placeholder="OD"></td><td></td><td><input type="text" maxlength="9"  name="cenado" placeholder="DO"></td></tr>
          <tr><td><b>Rodzaj Paliwa:</b></td><td><select name="paliwo" id="paliwo">
            <option value="benzyna">benzyna</option>
            <option value="diesel">diesel</option>
            <option value="elektryk">elektryk</option>
          </select></td></tr>
        </table>
    </div>
</div>
<footer></footer>
</body>
</html>