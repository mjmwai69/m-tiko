<?php

require_once('dbconnect.php');



if (isset($_GET['id'])){
    $id = $_GET['id'];

    $delete_query = mysql_query("DELETE FROM `inventory` WHERE `material_id` = '$id' ");

    if ($delete_query) {
        // echo "Delete successful";
        echo "<script> alert('Deleted Successfully.');window.location.href ='viewmaterials.php';</script>";

    } else {
        echo "Delete not successful";
    }
}