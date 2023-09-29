<?php
include "db_config.php";
if(isset($_POST['Add']))
{
    $depid=$_POST['deptid'];
    $depname=$_POST['deptname'];
   
    $query=mysqli_query($mysqli,"INSERT into dep values('$depid','$depname')") or die(mysqli_error($mysqli));
    header("location:admin-view-home.php");
}