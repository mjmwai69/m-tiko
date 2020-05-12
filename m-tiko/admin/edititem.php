<?php 
require_once('../dbconnect.php');
$id = $_GET['id'];

$id = $_GET['id'];
$query_user1 = mysql_query("SELECT * FROM `inventory` WHERE `material_id` = '$id' ");
$rowuser1 = mysql_fetch_assoc($query_user1);


?>

<script type="text/javascript">
$(function(){
	$('body').on("click", ".button-classfq", function(e) {
		//$(".button-classf").click( function() {
			  
		e.preventDefault();
		$('#message_divfq').show(); 
		
{	

        var info = $("#editmaterial").serialize();
		$.ajax({
			type: "POST",
			url: "editmaterialsubmit.php",
			data: info,
			success: function(result){
				$('#message_divfq').html(result); 
				$(".dvd").show();
			}
			 
		});
		e.preventDefault();
}
});
});
</script>
<style>
#message_divfq { 
display:none;
}
</style>
<div id="message_divfq"> loading...
</div>
<form name="editmaterial" id="editmaterial" class="editmaterial" method="POST" action="">

<label>Description</label>
<br>
<textarea class="form-control" name="description" rows="3" id="comment" ><?php echo $rowuser1['description']; ?></textarea>


<br>
<label>number of tickets available</label>
<br>
<input type="text" id="number of tickets available" name="number of tickets available" value="<?php echo $rowuser1['number_of_tickets']; ?>">
<br><br>
<input type="hidden" id="mid" name="mid" value="<?php echo $_GET['id']; ?>">
<input type="submit" class="btn btn-success button-classfq" name="submit" value="SAVE"></button>



</form>
