<?php include"includes/header.php";
global $db;?>

<!DOCTYPE html>
    <html>
    <?php session_start();
    if (isset($_SESSION['email'])){ ?>
      <head>
        <meta charset="utf-8">
        <title>Test page</title>
        <script type="text/javascript" src="js/function.js"></script>
        <link rel="stylesheet" href="css/css2.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
        <h1><p style="text-align:center">Zoosdey</p></h1> 
        <div class="container">
        <div><br/><br/><br/><br/><br/><br/>
        <img src="img/afrique.jpg" alt="Africa's geography" class="zoom"><br/>
            <h4>Description:</h4>   
            here's the " land of Africa " sector, you will find typical animals from Africa : <br/>
            lions, elephants, girafes, zebras,..
            there are in total 17 animals.
        </div>
        <div><br/><br/><br/><br/><br/><br/>
        <img src="img/asie.jpg" alt="Asia's geography" width=75% height=77% class="zoom"><br/>
            <h4>Description:</h4>
            here's the " land of Asia " sector, you will find typical animals from Asia :<br/>
             there are in total 19 animals.
        </div>
        </div>
        <div class="container2">
        <div><br/><br/><br/><br/><br/><br/>
          
            <img src="img/sudam.jpg" alt="South America's geography" class="zoom"><br/>
            <h4>Description:</h4>
            here's the " South America corner " sector, you will find typical animals from South America :<br/>
            there are in total 12 animals.
        </div>

        <div><br/><br/><br/><br/><br/><br/>
            <div class="img2">
            <img src="img/tropiques.jpg" alt="Tropics photo" width=40% height=40% class="zoom"><br/>
            <h4>Description:</h4>
            here's the " Tropics " sector, you will find typical animals from Tropics :<br/>
            there are in total 15 animals.
            </div>
        </div>
        </div>
        <br/><br/><br/>
      </body>
      <?php } else {

        echo("You're not logged in, you may not use this site");
      } ?>
          <form>  
             <input type = "button" onclick = "bonjour()" value = "Print Hello">   
          </form>     
</html>