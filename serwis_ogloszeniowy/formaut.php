<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="formautcss.css" />
    <title>Serwis Samochodowy</title>
  </head>
  <body>
    <header>
      <h1>SERWIS</h1>
    </header>
     <div id="container">
     </div>    
     <div id="głowny">
        Dodaj Ogloszenie
        <div class="formularzyk">
            <form action="insertauta.php" method="post">
              <table>
                <thead>
                  <tr>
                    <td >Marka <input type="text" name="marka" id="marka" placeholder="marka"> </th>
                    <td >Model<input type="text" name="model" id="model" placeholder="model"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td >Przebieg <input type="text" name="przebieg" id="przebieg" placeholder="przebieg"> </td>
                    <td > Stan: <select id="stan" name="stan">
                      <option value="Uzywane"> Używane</option>
                      <option value="Nowy"> Nowy</option>
                      <option value="Powypadkowy"> Powypadkowy</option>
                      <option value="Uszkodzony"> Uszkodzony</option></td>
                  </tr>
                  <tr>
                    <td >Rocznik <input type="text" name="rocznik" maxlength="4" id="rocznik" placeholder="rocznik"></td>
                    <td >Cena <input type="text" name="cena" id="cena" placeholder="cena"> </td>
                  </tr>
                  <tr>
                    <td>Rodzaj Paliwa <select id="rodzaj_paliwa" name="rodzaj_paliwa"> 
                      <option value="Diesel"> Diesel</option>
                      <option value="Benzyna"> Benzyna</option>
                      <option value="Elektryk">Elektryk</option>
                  </select> </td>
                    <td >Moc <input type="text" name="moc" id="moc" maxlength="4" placeholder="moc"></td>
                  </tr>
                
                </tbody>
               <tr> <td colspan="2" ><textarea cols="95"></textarea></td></tr>
                </table>
                <input type="submit" class='bomba'>
               
            </form>
       </div>
      </div>
      
       
          
      
      </div>
    <footer>Autorzy::)))))))))</footer>
  </body>
</html>
