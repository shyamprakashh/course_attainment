<?php 
    include('db_config.php');
    $user=$_POST['uname'];
    $pass=$_POST['psw'];

    $query=mysqli_query($mysqli,"select * from user where uname='$user' and passw='$pass'") or die(mysqli_error($mysqli));
    $count=mysqli_num_rows($query);

    if($count>0){
      $row = mysqli_fetch_assoc($query);
      if($row['role']=="admin")
        header("location:option.php");
      else if($row['role']=="faculty")
        header('location:staff-home.php');
      else if($row['role']=="hod")
        header('location:hod-home.php');
    }else{
      
      header("location:invalid-index.php");
    }

  
?>