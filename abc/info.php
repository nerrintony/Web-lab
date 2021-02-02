<html>
<body bgcolor="lightblue">
<form action="main.html" method="post">
<center>
<br><br>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
$Name=$_POST['un'];
$email=$_POST['em'];
$Phone=$_POST['num'];
$pass=$_POST['pass'];

$sql="INSERT INTO form1(Name,email,Phone,pass)values('$un','$email','$Phone','$pass')";
if(mysqli_query($conn,$sql))
{
echo "new record create successfully!";
}
else
{
echo "error:" .$sql ."" .mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br>
<input type="submit" value="back to home" name="sub">
</center>
</body>
</html>