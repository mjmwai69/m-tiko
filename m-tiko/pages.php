 <!-- Page Content -->
<div id="page-content-wrapper">

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
</nav>


<div class="container-fluid">
  <?php  
  if(isset($_GET['page'])){
    $page = $_GET['page'];
    if ($page == 'a'){
      include('materials_req.php');
    }
    if ($page == 'b'){
      include('bookedgigs.php');
    }
    if ($page == 'c'){
      include('userprofile.php');
    }
  }
  
  ?>
</div>
</div>
<!-- /#page-content-wrapper -->