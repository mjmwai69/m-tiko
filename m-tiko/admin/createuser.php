
<!-- //start session
// session_start();
//only admin allowed

//enter details




	//insert into db
	//user created successfully -->

    <?php
// session_start();
// if(!isset($_SESSION['userID']) || $_SESSION['ulevel']!=1)
// {
// 	header("Location:../index.php");
// 	exit;
// }
// $username=$_SESSION["userID"];
require_once("../dbconnect.php");
?>

<?php 
    include 'header.php';
?>


<style type="text/css">
#container #home
{
	padding:3px 1px 3px 1px;
	overflow:hidden;
	white-space:normal;
	/*min-width:100%;*/
}
</style>
<div id="banner">
	<div class="logo">
   	  <!-- <h1>Churchill show M-ticketing system</h1> -->
    </div>	<!--end of the logo div-->
    <div class="title">
    	<!-- <a href="../logout.php">Logout</a> <?php echo $_SESSION['username'];?> -->
    	<!-- <div align='right'>	<?php echo date('l dS, F Y  h:i a');?><div> -->
    </div>	<!--end of the title div-->
</div> <!--end of banner div-->

<div id="container">


      
    <h4>Create New User</h4>
	   <!-- <?php
     $cdate=date("Y-m-d H:i");
		?> -->
	
            	<?php if (!empty($error))	{?>
       	 <div id='error'><?php echo $error; ?> </div>
								<?php }?> 

 		
        
    <div id="box-container">
      
       	<form action="" method="post" id="createuser" name="createuser">
        <fieldset ><legend >User Details</legend>

        <table class="table table-bordered table-responsive">
          
          <!-- <table align="left" cellspacing="2px" cellpadding='2px' style="margin:3px 1px 3px 1px"> -->
          
          <div align="left">Username</div>
          <br>
			<input type="text" name="user" id="user"  class='txt' value="<?php if (isset($create->user)){echo $create->user;}?>"/>
		  
           <div align="left">Domain</div>
          <div id="area">
			  	<select id="domain" name="domain">
			  	<option value="">Select Domain</option>
		 			<option value="customer" >user</option>
					<option value="staff" >admin</option>
			</select></br></div>
				</td>
				
			</tr>
			   
		   </table>
           </fieldset>
		   
		   <tr><td colspan="2" align="center">
				 <input type="submit" name="action" id="action" class='button' value="Create User"   />
                 <button type="button" onclick="history.back();">Back</button>
          </td></tr>
          
       
                       
          </form> 
 









</div>