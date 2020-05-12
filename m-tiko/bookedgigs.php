<?php
    session_start();
    include('dbconnect.php');
    // echo('dbconnection successful');
  
    if(isset($_SESSION['email'])){

   echo "Welcome ".$_SESSION['username'];
   $query_user = mysql_query("SELECT * FROM `orders` ");
   $rowuser= mysql_fetch_assoc($query_user);
 ?>
<?php
include('footer.php');
?>
<div class="card">
  <h5 class="card-header">Cutover CRQs</h5>
  <div class="card-body">
    <table class="table table-bordered table-wrapper-scroll-y my-custom-scrollbar">
    <thead>
    <tr>
      <th >CRQ</th>
      <th >Description</th>
      <th >Group</th>
      
     
      
    </tr>
  </thead>
  
 
 <?php do { ?>
<tbody id="myTable">
<tr>
    <td><?php echo $rowuser['CRQ']; ?></td>
    <td><?php echo $rowuser['description']; ?></td> 
    <td><?php echo $rowuser['group']; ?></td> 
   
    
   
<td>
        
</tr>
    
    </tbody>
    
<?php } while ($rowuser = mysql_fetch_assoc($query_user)); ?>
 

</table> 
  </div>
</div>

<?php
    }
?>