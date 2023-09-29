<?php
    include "db_config.php";
    if(isset($_GET['deptid'])){
        $deptid = $_GET['deptid'];
        $sql = "DELETE from dep where depid=$deptid";
        $conn=mysqli_connect ("localhost","root","","department");
        $conn->query($sql);
    }
    header('location:del.php');
    exit;
?>