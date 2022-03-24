<!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Test page</title>
        <link rel="stylesheet" href="css/css2.css">
      </head>
      <body>
		<?php $heure=date("H");
    echo("$heure");
		if($heure>0 and $heure<=12){
			?>
			It's morning, here's a zebra:<br/><img src="img/zebra.jpg" alt="Zebra">
			<?php
		} 
			if($heure > 12 and $heure <=18){
				?>
			It's afternoon, here's a girafe:<br/><img src="img/girafe.jpg" alt="Girafe">
			<?php }  
			if($heure>18 and $heure<=0){?>
      It's noon, here's a panda:<br/><img src="img/pandan.jpg" alt="Panda" width=40% height=40%>
      <?php }
      ?>
        <h1><p style="text-align:center">Test image:</p></h1>
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
            here's the " land of Asia " sector, you will find typical animals from Asia :<br/>
            there are in total 19 animals.
            
        </div>

        <div><br/><br/><br/><br/><br/><br/>
            <div class="img2">
            <img src="img/tropiques.jpg" alt="Tropics photo" width=40% height=40% class="zoom"><br/>
            <h4>Description:</h4>
            here's the " land of Asia " sector, you will find typical animals from Asia :<br/>
            there are in total 19 animals.
            </div>
        </div>
        </div>
        <br/><br/><br/>
        <ul id="wordpress">
          <li><a href="https://fr.wordpress.org/">Wordpress page</a></li>
        </ul>

      </body>
    </html>