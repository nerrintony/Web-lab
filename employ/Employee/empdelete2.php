<html>
<body bgcolor="#151515">
<form action="main.html" method="post">
<center style="color : white">
<?php
include_once 'conn.php';
$rid=$_POST['id'];
$sql="DELETE FROM reg_emply WHERE id='$rid'";
if(mysqli_query($conn,$sql))
{
echo "Record Deleted Succesfully";
}
else
{
echo "Error Deleting Record:".mysqli_error($conn);
}
mysqli_close($conn);
?>
<br>
<br>
<inputtype="submit" value="Back to Home Page" name="submit">
</center>
</body>
</html>