<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "db_config.php";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-table.css">
    <title>Document</title>
</head>
<body>
    <center><h1>DEPARTMENT DETAILS</h1><br><br><br><br><br>
    <form action="up.php" method="POST">
    <b>Department ID:</b><br><input type="text" name="deptid" required>
    <br><br>
<b> Department Name:</b><br> <input type="text" name="deptname" required><br><br>
<button type="submit" name="Add"><b>ADD</b></button>
</form><br><br>
<?php
$conn=mysqli_connect("localhost","root","","department");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$sql="SELECT * from dep";
$result=$conn-> query($sql);
if($result->num_rows>0)
{   echo"<table border='1'><thead><tr><th>S.No<th>Dept Id<th>Dept Name</thead><tbody>";
    $sno=0;
    while($row=$result->fetch_assoc()){
        $sno++;
        echo "<tr><td>$sno<td>".strtoupper($row["depid"])."</td><td>".$row["depname"]."</td>".
        "<td>".
        "<a class='btn-btn-success' href='update.php?depid=$row[depid]'>Update</a>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
        ."<a class='btn-btn-failed' href='delete.php?depid=$row[depid]'>DELETE</a>"
        ."</td></tr>";
    }
    echo"</tbody></table>";
}
?>
</center>
</body>
</html>
