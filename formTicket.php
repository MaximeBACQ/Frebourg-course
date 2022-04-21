<head>
    <link rel="stylesheet" href="css/ticket.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<?php include("includes/header.php"); 
session_start();
if (isset($_SESSION['email'])){ 
?>
</head>

<body>
<form method="get" action="recupTicket.php" class="form">
    <h3> Ticket </h3>
    <div class="form-group">
        Enter the title of your problem
        <input type="text" name="title"> </input><br/>
    </div>
    <div class="form-group">
        <textarea name="description"> Enter a comprehensive description of your problem</textarea><br/>
    </div>
    <div class="form-group"></div>
        priority level :<select class="form-select" aria-label="Default select example" name="danger">
            <option selected>--please choose a level of danger--</option>
            <option value="Low"> Low danger </option>
            <option value="Medium"> Medium danger </option>
            <option value="High"> High danger </option>
        </select><br/>
    </div>
    <div class="form-group"></div>
        status :<select class="form-select" aria-label="Default select example" name="status">
            <option selected>--please choose a status--</option>
            <option value="happening"> In progress </option>
            <option value="happened"> Already happened </option>
            <option value="willhappen"> Will happen  </option>
        </select><br/>
    </div>
    <div class="form-group">
        which zoo sector is concerned ? :<select class="form-select" aria-label="Default select example" name="sector">
            <option value="">--please choose a zoo sector--</option>
            <option value="Africa"> Africa's lands</option>
            <option value="Asia"> Asia's lands </option>
            <option value="Tropics"> Tropics </option>
            <option value="Southam">South america's lands</option>
        </select><br/><br/>
    </div>
    <div class="form-group">
        <h3> Your login </h3>
        enter your email :<input type="email" placeholder="your email" name="mail"><br/>
        enter your password:<input type="password" placeholder="your password" name="pass"><br/>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</body>
<?php } else {
    echo "you're still not logged in, tf you think you're doing?"; 
    }?>