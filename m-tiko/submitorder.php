<?php


require_once('dbconnect.php');



if (isset($_POST['SUBMIT'])){ 
    $event_name= $_POST['event'];
    $gname=$_POST['groupname'];
    $descr=$_POST['description'];


$mat_query = mysql_query("SELECT * FROM `inventory` WHERE  'group' = '$gname' AND 'description' = '$descr' ") or die(mysql_error());
$row_Log = mysql_fetch_assoc($mat_query);
$totalRows_Log = mysql_num_rows($mat_query);
$sql="INSERT INTO `orders` ( 'event_name','group','description','date','number_of_tickets') VALUES ('$event','$gname','$descr','$date','$ticket')"; 
$ins_query = mysql_query( $sql);  


if ($ins_query) {

    echo "<script> alert('Updated Successfully.');window.location.href ='landing.php?page=a';</script>";
}
   
 else {
   

 //  echo "<div style='color:red; font-weight:800;'>Update error.</div>";

   
}

}


  
    ?>