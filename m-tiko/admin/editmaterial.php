<?php

include 'dbconnect.php';
include 'header.php';

session_start();
if ( isset( $_SESSION['email'] ) && ($_SESSION['userlevel']=='admin') ) {
  // Grab user data from the database using the user_id
  // Let them access the "logged in only" pages
echo 'Welcome '.$_SESSION['username'] ;

?>
<script>
        $(document).ready(function() {
            $("#groupname").change(function() {
                var groupname = $(this).val();
                if(groupname != "") {
                    $.ajax({
                    url:"get_description.php",
                    data:{groupname},
                    type:'POST',
                    success:function(response) {
                        var resp = $.trim(response);
                        $("#description").html(resp);
                        }
                    });
                } else {
                    $("#description").html("<option value=''>------- Select --------</option>");
                }
            });
        });
    </script>
    
<div class="well well-lg" method="POST"  >
    <div>
        <h2>EDIT MATERIAL</h2>
</div>
<form name="editmaterial" id="editmaterial" class="editmaterial" method="POST" action="editmaterialform.php">
    <div class="">
    <label>Group:</label>
    <select name="groupname" id="groupname">
      <option value=''>------- Select --------</option>
      <?php 
    //   $sql = "select `groupname` from `inventory`";
      $res = mysql_query("select * from `inventory` group by `groupname`");
    //   $rowuser = mysql_fetch_assoc($res);

     
        while($rowuser = mysql_fetch_assoc($res)) {
          $name = $rowuser['groupname'];
                    
          echo "<option value='".$name."'>".$name."</option>";
        }
      
      ?>
    </select>
    
    <label>Description :</label>
    <select name="description" id="description"><option value=''>------- Select --------</option></select>
    
  </div>
  <br>
  <?php
   $res = mysql_query("select * from `inventory` group by `groupname`");
  while($rowuser = mysql_fetch_assoc($res)) {
          $uom = $rowuser['number of tickets available'];
          $mid = $rowuser['material_id'];
        //   echo $uom;

          echo "<input type='hidden' id='number of tickets available' name='number of tickets available' value='".$number_of_tickets_available."'>";
          echo "<input type='hidden' id='mid' name='mid' value='".$mid."'>";
        }
        ?>
  
<!-- <div name="description" id="descriptiond"></div> -->
<input type="submit" class="btn btn-success" value="PROCEED TO EDIT">

  </form>
  <!-- <?php
  include 'editmaterialform.php';
  
  ?> -->
  <br><br>
  <button class='btn btn-success btn-lg'><a href='welcome.php'>Home</a></button>

  <?php } else {
  // Redirect them to the login page
  header("Location: index.php");
}
?>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>