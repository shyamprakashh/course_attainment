<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-tabl.css">
    <title>Document</title>
</head>
<body>
    <br><br><center><u><h1>DEPARTMENT DETAILS</h1></u><br><br><br>
    <form action="cor.php" method="POST">
    <b><h3>Course</h3></b><input type="text" name="course">
    <br><br><br>
<button type="submit" name="Add"><b>ADD</b></button>
</form>
<?php
$conn=mysqli_connect("localhost","root","","department");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$sql="SELECT * from course order by course";
$result=$conn-> query($sql);
if($result->num_rows>0)
{   echo"<table border='1'><thead><tr><th>S.No<th>Course</thead><tbody>";
    $sno=0;
    while($row=$result->fetch_assoc()){
        $sno++;
        echo "<tr><td>$sno<td>".strtoupper($row["course"])."</td>".
        "<td>".
        "<a class='btn-btn-success' href='update.php?depid=$row[course]'>Update</a>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
        ."<a class='btn-btn-failed' href='delete.php?depid=$row[course]'>DELETE</a>"
        ."</td></tr>";
    }
    echo"</tbody></table>";
}
?>
</center>
</body>
</html>