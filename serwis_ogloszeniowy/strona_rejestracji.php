<?php
require_once "config.php";
error_reporting(0);

// Definicja zmieniych i nadanie im pustych wartosci
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
$sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // nadanie zmiennym wartosci parametrów
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // parametry
            $param_username = trim($_POST["username"]);
            
            // wykonanie
            if(mysqli_stmt_execute($stmt)){
                // wynik
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "nazwa zajeta, wybierz inna";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "nie udalo sie nazwiazac polaczenia";
            }

            mysqli_stmt_close($stmt);
        }
    
    // sprawdzanie hasla
    if(empty(trim($_POST['password']))){ //jesli nie ma to komunikat
        $password_err = "Wpisz haslo";     
    } else{
        $password = trim($_POST["password"]);
    }
          
        // kwerenda na insertowanie danych do tabeli
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // przypisanie wartosci parametrow do pusych zmiennych
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // parametry
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // hashowanie hasla
            
            // logowanie
            if(mysqli_stmt_execute($stmt)){
                // przekierowanie do strony jesli udalo sie zalogowac
                header("location: strona_logowania.php");
            } else{
                echo "";
            }
            mysqli_stmt_close($stmt);
        }
    mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Rejestracja</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<header>
      <h1>Rejestracja</h1>
    </header> 
     <div id="głowny">
        <div class="logowanie">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                Login <br>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>"> <!-- Sprawdzanie czy input jest pusty, jesli tak to dostaje klase is-invalid -->
            </div>    
            <div class="form-group">
                Haslo <br>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Rejestracja">
            </div>
        </form>  
    </div>
    </div>
    <footer></footer> 
</body>
</html>