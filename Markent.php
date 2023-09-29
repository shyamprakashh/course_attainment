<?php
include "db_config.php";
if(isset($_POST['Add']))
{
    $stu=$_POST['stu'];
    $ques=$_POST['ques'];
    $res=$_POST['res'];
   
    $query=mysqli_query($mysqli,"INSERT into mark values('$stu','$ques','$res')") or die(mysqli_error($mysqli));
    header("location:mark-view.php");
}