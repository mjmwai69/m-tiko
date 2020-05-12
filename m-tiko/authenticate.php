<?php  
session_start();

//connect to our localdb
require_once('dbconnect.php'); 
if (isset($_POST["LogIn"])) {

$email = mysql_real_escape_string($_POST['email']);
$emailparts = explode("@",$email);
$username = $emailparts[0];

$password = mysql_real_escape_string($_POST['pwd']);



if ($username == '') {

echo '<div style="padding-top:5px; padding-bottom:5px;"  class="alert alert-info alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong><span class="fa fa-exclamation-circle"></span></strong>  Enter email address
</div>';
//die ("Email you entered already exist!");
die();
}
if ($password == '') {

echo '<div style="padding-top:5px; padding-bottom:5px;"  class="alert alert-info alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong><span class="fa fa-exclamation-circle"></span></strong>  Enter password
</div>';
//die ("Email you entered already exist!");
die();
}


// if (ini_get('date.timezone') == '') { date_default_timezone_set('Africa/Nairobi'); } //$newDate = date("Y-m-d 23:59:59", strtotime($etd));

// $timenow = time(); 



$query_recordf = mysql_query("SELECT * FROM `users` WHERE `email` = '$email' ") or die(mysql_error());
$row_recordf = mysql_fetch_assoc($query_recordf);
$totalRows_recordf = mysql_num_rows($query_recordf);


// echo $totalRows_recordf;

//Check if user is not created in our DB
if ($totalRows_recordf == 0) { echo '<div style="padding-top:5px; padding-bottom:5px;"  class="alert alert-info alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<strong><span class="fa fa-exclamation-circle"></span></strong>  User is not created  - contact system admin  to add you 
</div>'; die(); }

//if user is in our DB Continue
if ($totalRows_recordf == 1) {
if ($row_recordf['ldap'] == 'no') { 
		echo 'we are here';
		$password = mysql_real_escape_string(md5($_POST['pwd']));

		$query_Log = mysql_query("SELECT * FROM `users` WHERE `email` = '$email' AND `passwd` = '$password' ") or die(mysql_error());
		$row_Log = mysql_fetch_assoc($query_Log);
		$totalRows_Log = mysql_num_rows($query_Log);
		
		
		
		if ($totalRows_Log == 1) { 
		$nameofw = $row_Log['username'];
		$emails = $row_Log['email'];
		$names = $row_Log['username'];
		$_SESSION["email"] = strtolower($email);
		$_SESSION['username'] = $names;
		$setz = $_SESSION['company'];
	

		echo '<div style="padding-top:5px; padding-bottom:5px;"  class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong><span class="fa fa-exclamation-circle"></span></strong> Welcome '.$nameofw.' , Login successfull </div>';
		
		if ($_SESSION['userlevel'] == 'Admin'){
			//echo "1";
			echo "<script> window.location.href='m-tiko/admin/welcome.php';</script>";

		}
		if($_SESSION['userlevel'] != 'Admin'){
			// echo "2";
			echo "<script> window.location.href='/m-tiko/landing.php';</script>";
		}
		 
		echo $_SESSION['username'];
		echo $_SESSION['userlevel'];
		echo $_SESSION['company'];
	}
		}
		
		if ($totalRows_recordf == 0) { 
		die ('<div style="padding-top:5px; padding-bottom:5px;"  class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong><span class="fa fa-exclamation-circle"></span></strong>  Login failed.Username/Password is incorrect Nonldap </div>');
		}


} 
}
die();
?>


