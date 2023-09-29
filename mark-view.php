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
    <form action="Markent.php" method="POST">
    <p><b><h3>Student:</b><input type="text" name="stu">
    <br><br><br>
<b>Question:</b><input type="text" name="ques"><br><br><br>
<b>Result:</b><input type="text" name="res"><br><br><br></p></h3>
<button type="submit" name="Add"><b>ADD</b></button>
</form>
<br><br>
<?php
$conn=mysqli_connect("localhost","root","","department");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$sql="SELECT * from mark order by stu";
$result=$conn-> query($sql);
if($result->num_rows>0)
{   echo"<table border='1'><thead><tr><th>S.No<th>Student<th>Question<th>Result</thead><tbody>";
    $sno=0;
    while($row=$result->fetch_assoc()){
        $sno++;
        echo "<tr><td>$sno<td>".strtoupper($row["stu"])."</td><td>".strtoupper($row["ques"])."</td><td>".strtoupper($row["res"]).
        "<td>".
        "<a class='btn-btn-success' href='update.php?depid=$row[stu]'>Update</a>"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
        ."<a class='btn-btn-failed' href='delete.php?depid=$row[stu]'>DELETE</a>"
        ."</td></tr>";
    }
    echo"</tbody></table>";
}
?>
</center>
</body>
</html>