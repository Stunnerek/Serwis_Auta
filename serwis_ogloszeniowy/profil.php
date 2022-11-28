<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profil.css">
    <title>Profil uzytkownika</title>
    <?php
            require_once "config.php";  
            error_reporting(0);
            if(isset($_POST['wyloguj'])) {
                session_destroy();
                header("Refresh:0");
                header("location: glowna.php");
            }
        ?>
</head>
<body>
    <header>
        <a href="glowna.php"><h1>Serwis</h1></a>
        
    </header>
    <section>
        <div id="profil">
            <img src="ikona.png" alt="ikona">
            <h1>Witaj 
                <?php
                    echo $username;
                ?>
            </h1>
            <h2>Dołączono: <?php while ($row = $dol->fetch_assoc()) {echo $row['created_at'];} ?>
            </h2><br>
        <form method="post">
            <a href="formaut.php"><input type="button" value="Dodaj ogloszenie"></a>
            <input type="submit" name="wyloguj" value="Wyloguj"/>
        </form>
        </div>
    </section>
    <footer>
    </footer>
</body>
</html>