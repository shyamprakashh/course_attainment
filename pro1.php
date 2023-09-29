<?php
include "db_config.php";
if(isset($_POST['Add']))
{
    $depid=$_POST['deptid'];
    $programid=$_POST['Pid'];
    $pgmg=$_POST['Pname'];
    $glevel=$_POST['GL'];
    $duration=$_POST['duration'];
    $sub=$_POST['Subject'];
   
    $query=mysqli_query($mysqli,"INSERT into program values('$depid','$programid','$pgmg','$glevel','$duration','$sub')") or die(mysqli_error($mysqli));
    header("location:programe-view.php");
}
?>