<?php include("dbconnect.php"); ?>


<?php
if(isset($_POST['group'])) {
    $gname = mysql_real_escape_string($_POST['group']);

    // echo $gname; echo "<br>";

    $query_user = mysql_query("SELECT * FROM `inventory` where `group` = '$gname' ") or die(mysql_error());
    $rowuserl = mysql_num_rows($query_user);

   if($rowuserl != 0) {
        while($rowuser = mysql_fetch_assoc($query_user)) {
          $nameg = mysql_real_escape_string($rowuser['description']);
          echo "<option value='".$nameg."'>".$nameg."</option>";
        //   echo $nameg; 
        //   echo "<br>";
    }
  }
else{



    echo "<option value=''>no vakue</option>";
}



} 
?>