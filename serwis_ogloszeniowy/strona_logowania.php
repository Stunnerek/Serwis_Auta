<?php
// jesli zalogowany = stona profilu
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: profil.php");
    exit;
}
require_once "config.php";
 
// utworzenie zmiennych i nadanie im pustych wartosci
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// jesli fermularz zostal przeslany to:
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // sprawdzanie loginu
    if(empty(trim($_POST["username"]))){
        $username_err = "Wyporwadz nazwe uzytkownika";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // sprawdzanie hasla
    if(empty(trim($_POST["password"]))){
        $password_err = "Wprowadz haslo";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){ // warunek: jezeli nie nie wprowadzono to zrob dalej

        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // przypisanie wartosci z parametrow do zmiennych 
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = $username;
            
            // logowanie
            if(mysqli_stmt_execute($stmt)){
                // wynik
                mysqli_stmt_store_result($stmt);
                
                // jesli wpisany login istnieje w bazie to idzie dalej
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // logowanie
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // rozpoczyna sesje 
                            session_start();
                            
                            // dane z sesji
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            header("location: profil.php");
                        } else{
                            $login_err = "Zle haslo lub login";
                        }
                    }
                } else{
                    // jesli nie istnieje taki uzytkownik
                    $login_err = "Taki uzytkownik nie istnieje";
                }
            } else{
                echo "Nie udalo sie zalogowac.";
            }
        }
    }
}
$_SESSION["id"] = $id;
$_SESSION["username"] = $username;                            
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <title>Serwis Samochodowy</title>
  </head>
  <body>
    <header>
   
      <h1>Logowanie</h1>
    </header>
     <div id="g??owny">
        <div class="logowanie">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"><!--  kodowanie znakow html -->
                <div class="form-group">
                    Login <br>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>    
                <div class="form-group">
                    Has??o <br>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Zaloguj">
                </div>
                <div class="form-group">
                Nie masz konta? <a href="strona_rejestracji.php">Zarejestruj si??</a>
                </div>  
        </form>
        </div>
        </form>    
       </div>
      </div>
      </div>
    <footer></footer>
  </body>
</html>