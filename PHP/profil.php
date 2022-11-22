<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil uzytkownika</title>
    <?php
            require_once "config.php";  
            error_reporting(0);
            if(isset($_POST['wyloguj'])) {
                session_destroy();
                header("Refresh:0");
                header("location: glowna.html");
            }

        ?>
</head>
<body>
    <header>
        <h1>Serwis</h1>
        <img src="ikona.png" alt="ikona">
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
            </h2>
         
        <form method="post">
            <input type="submit" name="wyloguj" value="Wyloguj"/>
        </form>
        </div>
        <div id="wyniki">
            skrypt
        </div>
    </section>
    <footer>
        elo
    </footer>
</body>
</html>