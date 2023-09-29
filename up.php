<?php
include "db_config.php";
$depid=$_POST['deptid'];
$depname=$_POST['deptname'];
$conn=mysqli_connect("localhost","root","","department");
if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['deptid'])){
      header("location:admin-view-home.php");
      exit;
    }
    $depid = $_GET['deptid'];
    $sql = "SELECT * from dep where deptid=$depid";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location:admin-view-home.php");
      exit;
    }
    $depid=$row["deptid"];
    $depname=$row["deptname"];

  }
  else{
    $depid=$_POST['deptid'];
$depname=$_POST['deptname'];
    $sql = "UPDATE dep set 'deptid'='$depid', 'deptname'='$depname' where 'deptid'='$depid'";
    $result = $conn->query($sql);
    header('location:admin-update-home.php');
  }
?>