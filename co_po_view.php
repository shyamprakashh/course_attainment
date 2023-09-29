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
    <form action="co_p.php" method="POST">
    <b><h3>Co_po_pso mark</h3></b><input type="text" name="co_po">
    <br><br><br>
<button type="submit" name="Add"><b>ADD</b></button>
<br><br>
<?php
$conn=mysqli_connect("localhost","root","","department");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$sql="SELECT * from co_po order by co_po";
$result=$conn-> query($sql);
if($result->num_rows>0)
{   echo"<table border='1'><thead><tr><th>S.No<th>Course co_po mark</thead><tbody>";
    $sno=0;
    while($row=$result->fetch_assoc()){
        $sno++;
        echo "<tr><td>$sno<td>".strtoupper($row["co_po"])."</td>".
        "<td>".
        "<a class='btn-btn-success' href='update.php?depid=$row[co_po]'>Update</a>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
        ."<a class='btn-btn-failed' href='delete.php?depid=$row[co_po]'>DELETE</a>"
        ."</td></tr>";
    }
    echo"</tbody></table>";
}
?>
</form>
</center>
</body>
</html>