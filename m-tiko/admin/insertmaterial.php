<?php
require_once('../dbconnect.php');

if (isset($_POST['groupname'])){ 
    $groupname = $_POST['groupname'];
    $description = $_POST['description'];
    $uom = $_POST['number of tickets'];

    
     $ins_query = mysql_query("INSERT INTO `inventory` (`groupname`,`description`, `number of tickets`) VALUES ('$groupname','$description', '$number_of_tickets')");

     if ($ins_query) {
        echo "<div style='color:green; font-weight:800;'>Inserted Successfully</div>";

     } else {
         echo "<div style='color:red; font-weight:800;'>Not inserted successfully</div>";
     }



}


?>
<br>
<!-- onclick="window.location.href = 'index.php'; -->
<button class='btn btn-success btn-lg'><a href='welcome.php'>Home</a></button>