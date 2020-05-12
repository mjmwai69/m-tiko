<?php
require_once('dbconnect.php');


echo 'h1';
if (isset($_POST['mid'])){ 
    echo 'h2';

    $mid = $_POST['mid'];
    // $groupname = $_POST['groupname'];
    $description = $_POST['description'];
    $uom =$_POST['number of tickets'];


    // echo $groupname;
    // echo "<br>";
    // echo $description;
    // echo "<br>";
    // echo $number of tickets;
    // echo "<br>";
    // echo $mid;
    // echo "<br>";

    $ins_query = mysql_query("UPDATE inventory SET `description` = '$description', `number of tickets` = '$number_of_tickets' WHERE `material_id` = '$mid'");
    
    //  $ins_query = mysql_query("INSERT INTO `inventory` (`groupname`,`description`, `number of tickets`) VALUES ('$groupname','$description', '$number_of_tickets')");

     if ($ins_query) {
        echo "<script> alert('Updated Successfully.');window.location.href ='viewmaterials.php';</script>";

     } else {
         echo "<div style='color:red; font-weight:800;'>Update error.</div>";
     }



}


?>
<br>
<!-- onclick="window.location.href = 'index.php'; -->
<!-- <button class='btn btn-success btn-lg'><a href='welcome.php'>Home</a></button> -->