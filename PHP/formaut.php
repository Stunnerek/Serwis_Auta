<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <input type="text" name="marka" id="marka" placeholder="marka"> <br>
        <input type="text" name="model" id="model" placeholder="model"> <br>
        Stan <select id="stan" name="stan">
            <option value="Uzywane"> Używane</option>
            <option value="Nowy"> Nowy</option>
            <option value="Powypadkowy"> Powypadkowy</option>
            <option value="Uszkodzony"> Uszkodzony</option>
        </select> <br>
        <input type="text" name="przebieg" id="przebieg" placeholder="przebieg"> <br>
        <input type="text" name="cena" id="cena" placeholder="cena"> <br>
        <input type="text" name="rocznik" maxlength="4" id="rocznik" placeholder="rocznik"> <br>
        rodzaj paliwa <select id="rodzaj_paliwa" name="rodzaj_paliwa"> <br>
            <option value="Diesel"> Diesel</option>
            <option value="Benzyna"> Benzyna</option>
            <option value="Elektryk">Elektryk</option>
        </select> <br>
        <input type="text" name="moc" id="moc" maxlength="4" placeholder="moc">
        <br>
        <input type="submit" value="Dodaj">
    </form>
</body>
</html>