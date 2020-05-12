<?php
session_start();
if ( isset( $_SESSION['email'] ) ) {
  // Grab user data from the database using the user_id
  // Let them access the "logged in only" pages
echo 'Welcome '.$_SESSION['username'] ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>M-tiko</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="container">
<div class="jumbotron">
    <h2>CHURCHILL SHOW M-TICKETING SYSTEM</h2>
    <br>
    <h3>ADMIN PORTAL</h3>
    <a href="/fsim/index.php">Log Out</a>
</div>
<br><br>
  <div class="well well-lg"><h3>User Management</h3>
    <div class="well well-sm"><li><a href="createuser.php">Add New User</a></li></div>
  
    <div class="well well-sm"><li><a href="viewusers.php">View Users</a></li></div>
</div>
<br><br>
  <div class="well well-lg"><h3><a href="viewmaterials.php">Event Management</a></h3>
    <!-- <li><a href="addmaterial.php">Add Material</a></li> -->
    <!-- <li><a href="viewmaterials.php">View Material</a></li> -->
    <!-- <li><a href="#">Delete Material</a></li> -->
  
  
  </div>

</div>

  
</div>


</body>
</html>
<?php } else {
  // Redirect them to the login page
  header("Location: index.php");
}
?>