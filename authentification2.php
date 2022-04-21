<?php include "includes/header.php"; ?>

<!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Authentification page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
      <?php if (!isset($_SESSION['email']))          // on teste : si la personne n'est pas connectée, on affiche le lien vers la page de connexion, sinon, on affiche qu'elle est 
      {                                               // déjà connectée
      ?>
      <h1> With the POST method:</h1>
        <form action="verification2.php" method="post" class="form-group">
          <input type="email" placeholder="your email" name="email"><br/>
          <input type="password" placeholder="your password" name="password"><br/>
          <button type="submit" name="connexion">Submit</button>
        </form>
      <?php
      }
      else
      {
        echo ' Tu es déjà connecté ! <br/>';
      }
?>
        