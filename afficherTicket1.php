<?php include"includes/header.php";?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php session_start();
    if (isset($_SESSION['email'])){ ?>

<form action="afficherTicket.php" method="post" class="form">
<h3> Print a ticket according to it's id </h3>
<div class="form-group">
    Enter the id of the ticket you want to display
    <input type="text" name="id"> </input><br/>
</div>
<button type="submit" class="btn btn-info">Submit</button>

<?php } else { 
    echo "LOG IN";
} ?>