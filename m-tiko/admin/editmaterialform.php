<?php

require_once('dbconnect.php');
include 'viewmaterials.php';

session_start();
if ( isset( $_SESSION['email'] ) && ($_SESSION['userlevel']=='admin') ) {
  // Grab user data from the database using the user_id
  // Let them access the "logged in only" pages
echo 'Welcome '.$_SESSION['username'] ;


?>


<?php  if (isset($_GET['id'])) {  ?>

<h2> Edit Material Details</h2>

<form name="editmaterial" id="editmaterial" class="editmaterial" method="POST" action="">

<!-- start -->
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Material Details</h4>
      </div>
      <div class="modal-body">
      <label>Description</label>
<br>
<textarea class="form-control" name="description" rows="3" id="comment" ><?php echo $rowuser1['description']; ?></textarea>
      <label>number of tickets </label>
      <br>
      <input type="text" id="number of tickets" name="number of tickets" value="<?php echo $rowuser1['number of tickets']; ?>">
      <input type="hidden" id="mid" name="mid" value="<?php echo $_GET['id']; ?>">
      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-success" name="submit" value="SAVE"></button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- end -->

</form>

<?php } ?>



<?php

include 'editmaterialsubmit.php';
?>

<?php } else {
  // Redirect them to the login page
  header("Location: index.php");
}
?>
