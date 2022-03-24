<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
   
<?php include("includes/database.php"); ?>

<h2>Display of every ticket :</h2>
         <table class="table">
            <thead>
               <tr>
                  <th>id</th>
                  <th>datet</th>
                  <th>login</th>
                  <th>subject</th>
                  <th>description</th>
                  <th>prio</th>
                  <th>sector</th>
                  <th>state</th>
               </tr>
            </thead>
            <tbody>
                  <?php
                  $q = $db -> query('SELECT count(id) FROM ticket ');
                  $nbTickets = $q->fetch();
                  for($i=1;$i<=$nbTickets[0];$i++)
                  {
                     $q2 = $db -> query("SELECT * FROM ticket WHERE id='$i'");                 
                     while($recupinfos=$q2 -> fetch())
                     {?>
                  <tr>
                     <td><?php echo($recupinfos['id']);?></td>
                     <td><?php echo($recupinfos['datet']);?></td>
                     <td><?php echo($recupinfos['login']);?></td>
                     <td><?php echo($recupinfos['sujet']);?></td>
                     <td><?php echo($recupinfos['description']);?></td>
                     <td><?php echo($recupinfos['prio']);?></td>
                     <td><?php echo($recupinfos['secteur']);?></td>
                     <td><?php echo($recupinfos['statut']."<br/>");?></td>
                     <?php }} ?>
               </tr>
            </tbody>
         </table>
      </div>