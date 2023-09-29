<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pro-view.css">
    <title>Document</title>
</head>
<body>
    <br><br><center><u><h1> DETAILS</h1></u><br><br><br>
        <form action="pro1.php" method="POST">
    <b><h3> Department ID:</h3></b><input type="text" name="deptid">
    <b><h3> Programe ID:</h3></b><input type="text" name="Pid">
    <b><h3> Programe Name:</h3></b><input type="text" name="Pname">
    <b><h3> Graduate Level:</h3></b><input type="text" name="GL">
    <b><h3> Duration:</h3></b><input type="text" name="duration">
    <b><h3> Subject:</h3></b><input type="text" name="Subject"><br> 
    <button type="submit" name="Add"><b>ADD</b></button>
    </form>
 
<?php
$conn=mysqli_connect("localhost","root","","department");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$sql="SELECT * from program";
$result=$conn-> query($sql);
if($result->num_rows>0)
{   
    echo"<table border='1'><thead><tr><th>S.No<th>Dept Id<th>Program ID<th>Program Name<th>Graduate Level<th>Duration<th>Subject</thead><tbody>";
    $sno=0;
    while($row=$result->fetch_assoc()){
        $sno++;
        echo "<tr><td>$sno<td>".strtoupper($row["depid"])."</td><td>".$row["programid"]."</td><td>".$row["pgmg"]."</td><td>".$row["glevel"]."</td><td>".$row["duration"]."</td><td>".$row["sub"]."</td>".
        "<td>".
        "<a class='btn-btn-success' href='update.php?depid=$row[programid]'>Update</a>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
        ."<a class='btn-btn-failed' href='delete.php?depid=$row[programid]'>DELETE</a>"
        ."</td></tr>";
    }
    echo"</tbody></table>";
}
?>
   </center>
</body>
</html>