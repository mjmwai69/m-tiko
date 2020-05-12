<?php
// server credentials
$host = "localhost"; //server
$user = "root"; //mysql db login
$pass = ""; //mysql db login

$dbname = "mtiko";
//connect query
$conn = mysql_connect($host, $user, $pass);
mysql_select_db($dbname);


?>