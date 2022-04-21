<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>

<?php include("includes/database.php");
      include("includes/header.php"); ?>

<?php $id = $_POST['id'];

$q = $db -> query("SELECT * FROM ticket WHERE id='$id'");
$recupTicket = $q -> fetch();
?><table class="table">
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
<?php $q2 = $db -> query("SELECT * FROM ticket WHERE id='$id'");
      $recupinfos = $q2 -> fetch();?>
    <tr>
        <td><?php echo($recupinfos['id']);?></td>
        <td><?php echo($recupinfos['datet']);?></td>
        <td><?php echo($recupinfos['login']);?></td>
        <td><?php echo($recupinfos['sujet']);?></td>
        <td><?php echo($recupinfos['description']);?></td>
        <td><?php echo($recupinfos['prio']);?></td>
        <td><?php echo($recupinfos['secteur']);?></td>
        <td><?php echo($recupinfos['statut']."<br/>");?></td>
    </tr>

<form action="changeTicketStatus.php" method="post" class="form">
<h3> Want to change a ticket's status using it's id ?</h3>
<div class="form-group">
   the id of the ticket you want to edit 
   <input type="text" name="idChange"> </input><br/>
   <select class="form-select" name="newStatus">
      <option selected>--please choose a new status--</option>
      <option value="happening"> In progress </option>
      <option value="happened"> Already happened </option>
      <option value="willhappen"> Will happen </option>
   </select>
    </div>
    <button type="submit" class="btn btn-danger">Change status</button><br/><br/><br/>
</form>