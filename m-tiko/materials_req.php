<?php
    session_start();
    include('dbconnect.php');
    // echo('dbconnection successful');
  
    if(isset($_SESSION['email'])){

   echo "Welcome ".$_SESSION['username'];
   $query_user = mysql_query("SELECT * FROM 'inventory' ");
   @$rowuser=mysql_fetch_assoc($query_user);
 ?> 


    <script>
        $(document).ready(function() {
            $("#group").change(function() {
                var group = $(this).val();
                if(groupn != "") {
                    $.ajax({
                    url:"get_description.php",
                    data:{group},
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
  <?php if
  (isset($_SESSION['email'])){ ?>  
  <div align="right">
  <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-log-out" ><a href="logout.php"></span> Log out</a>
        </button>
  </div><br>
  
  
<div  class="well well-lg" method="POST">


    <div>
        <h4>BOOK a Ticket?!</h4>
</div>
<form name="matrequest" id="matrequest" class="matrequest" method="POST" action="">
    <div class="">
    <!-- <script>
      $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
    </script> -->
    <label>Date:</label><br>
    <input size="16" name="date" type="text" value="<?php echo(gmdate('Y/m/d')); ?>" readonly class="form_datetime"><br>
    <label>Event date</label><br>
    <input size="16" name="CRQ" type="text" value="">
    <br>
    <label>Event name:</label><br>
  <input type="text" name="lname" value="">
  <br>
   
  <label>Group:</label>
  <input type="hidden" name="groupname" value="<?php echo ($_SESSION['username']); ?>">
  <br>
    <select name="groupname" id="groupname">
      <option value=''>------- Select --------</option>
      <?php 
    //   $sql = "select `groupname` from `inventory`";
      $res = mysql_query("SELECT * FROM  `inventory` group by `group`");
    //   $rowuser = mysql_fetch_assoc($res);

     
        while($rowuser = mysql_fetch_assoc($res)) {
          $name = $rowuser['group'];
                    
          echo "<option value='".$name."'>".$name."</option>";
        }
      
      ?>
    </select>
    
    <br><label>Description :</label><br>
    <select name="description" id="description"><option value=''>------- Select --------</option></select><br>
   
  <input type="hidden" name="username" value="<?php echo ($_SESSION['username']); ?>">
  <br>
  <?php 
    //   $sql = "select `groupname` from `inventory`";
    $res2 = mysql_query("SELECT * FROM  `inventory` group by  `description`");

    $userr = $_SESSION['email'];
    // echo "reasult".$userr;
      
      while($rowuser = mysql_fetch_assoc($res2));{
          
      $comp = $rowuser['company'];
     
    echo "<option value='".$comp."'>".$comp."</option>";
      }
  ?>
  
  
  
 <label>number of tickets:</label><br>
  <input type="text" name="number of tickets" value="">
  <br>
  
  <input type="submit" class="btn btn-success" value="SUBMIT TO ORDER" name="SUBMIT">
  </div>
  <br>
  <!-- <?php echo ($rowuser3['company']) ; ?> -->
  
<!-- <div name="description" id="descriptiond"></div> -->


  </form>
<?php 
include('submitorder.php');
?>

</div>


  <?php 
}}
 ?>