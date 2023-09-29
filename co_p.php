<?php
include "db_config.php";
if(isset($_POST['Add']))
{
    $co_po=$_POST['co_po'];
   
    $query=mysqli_query($mysqli,"INSERT into co_po values('$co_po')") or die(mysqli_error($mysqli));
    header("location:co_po_view.php");
}