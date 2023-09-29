<?php
include "db_config.php";
if(isset($_POST['Add']))
{
    $course=$_POST['course'];
   
    $query=mysqli_query($mysqli,"INSERT into course values('$course')") or die(mysqli_error($mysqli));
    header("location:add-course-view.php");
}