
<html>
<head>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: green;
  color: white;
  text-align: center;
}

</style>
<div class="footer">
<?php
if (ini_get('date.timezone') == '') {
    date_default_timezone_set('UTC');
}
echo "<p>m-tiko" . date("Y") . " </p>";
?>       
</div>

