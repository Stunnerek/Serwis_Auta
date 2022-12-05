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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body>
<header>
    <div id="baner"><h1>Serwis</h1></div>
    <a href="jesli.php"><div id="ikona"></div></a>
</header>
<div id="container">
<div id="lewydolny">
        <table style="border-collapse: collapse;">
        <form method="POST">
        <?php
            $a= new mysqli('localhost','root','','samochody');
            $qry = "SELECT * FROM samochody;";
          ?>
          <tr><td><b>Rocznik</b><td><input type="text" maxlength="4" name="rocznik" placeholder="rocznik"></tr>
          <?php
          error_reporting(0);
          $frocznik = $_POST['rocznik'];
          if ($_POST['rocznik'] != NULL){
            $qry = "SELECT * FROM samochody Where rocznik = $frocznik;";            
          }
          ?>
          <tr><td><b>Marka:</b></td><td><input type="text" maxlength="20"  name="marka"></td></tr>
          <tr><td><b>Stan:</b></td><td><input type="text" maxlength="15"  name="stan"></td></tr>
          <tr><td><b>Przebieg</b> </td><td><input type="text" maxlength="5"  name="przebod" placeholder="OD"></td><td></td><td><input type="text" maxlength="10"  name="przebdo" placeholder="DO"></td></tr>
          <tr><td><b>Cena</b> </td><td><input type="text" maxlength="6"  name="cenaod" placeholder="OD"></td><td></td><td><input type="text" maxlength="9"  name="cenado" placeholder="DO"></td></tr>
          <tr><td><b>Rodzaj Paliwa:</b></td><td><select name="paliwo" id="paliwo">
            <option value="benzyna">benzyna</option>
            <option value="diesel">diesel</option>
            <option value="elektryk">elektryk</option>
            <input type="submit" value="Wyszukaj">
          </select></td></tr>
        </form>
        </table>
    </div> 
</div>
<div id="głowny">
    <?php
        if  ($b=$a->query($qry))
        {
            $i = 0;
            while($c=$b->fetch_assoc())
            {   
                print'<div class="wynik"><div class="zdjecie"></div></p><div class="infog">';
                print $c['marka'].' '.$c['model'].'<br> Stan: '.$c['stan'].'<br> Cena: '.$c['cena'].'PLN</p>';
                print '<br><input type="button" id="wiecej'.$i.'" Value="POKAŻ OPIS" style="margin-right:10px;"><input type="button" id="mniej'.$i.'" Value="UKRYJ OPIS"></div><div class="op"'.$i.'>'.$c['przebieg'].'km przebiegu<br>'.$c['rocznik'].'r.<br>'.$c['rodzaj_paliwa'].'<br>'.$c['moc'].'KM'.'<p class="p"'.$i.'></p></div></div>';
                print '   <script>
                $(function(){
                    /* przycisk wiecej */
                    $("#wiecej'.$i.'").on("click", function(){
                    $(".wynik").eq('.$i.').css("width","98%")
                    $(".p").eq('.$i.').css("display","flex")
                    $(".op").eq('.$i.').css("display","flex")
                    $("#mniej").eq('.$i.').css("display","flex")
                    });
                    /* przycisk mniej */
                    $("#mniej'.$i.'").on("click", function(){
                    $(".wynik").eq('.$i.').css("width","70%")
                    $(".p").eq('.$i.').css("display","none")
                    $(".op").eq('.$i.').css("display","none")
                    $("#mniej").eq('.$i.').css("display","none")
                    });
                    /* niedziala */
                }) 
                </script>';
                $i = $i+1;  
            }
            $b->close();
        }
        $a->close();                            
        ?>

</div>
<footer></footer>
</body>
</html>
