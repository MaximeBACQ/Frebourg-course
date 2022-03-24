<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
   
<?php include("includes/database.php"); 
$id=$_POST['idChange'];
$newStatus=$_POST['newStatus'];

$update = $db->prepare("UPDATE ticket SET statut='$newStatus' WHERE id='$id'");
$update->execute();
echo(" The ticket's status has been changed to " . $newStatus);
?>