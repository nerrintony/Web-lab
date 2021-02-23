<html>
<body bgcolor="#151515">
<form action="index.html" method="post">
<center>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
$uid=$_POST['ID'];
$fname=$_POST['Name'];
$pass=$_POST['Password'];
$email=$_POST['Email'];
$phno=$_POST['Phone'];
$wrk=$_POST['Work'];
$sql="UPDATE reg_emply SET
Name='$fname',Password='$pass',Email='$email', Phone='$phno',Work='$wrk' where id='$uid'";
if(mysqli_query($conn,$sql))
{
echo "Updated Successfully !<br><br>";
}
else
{
echo "Error:".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br>
<br>
<input type="submit" value="Back to home page" name="submit">
</center>
</body>
</html> 