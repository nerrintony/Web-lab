<html>
<body bgcolor ="#151515">
<form action ="index.html" method="post">
<center>
<br>
<br>
<?php
include_once'conn.php';
if(isset($_POST['submit']))
{
$fname=$_POST['Name'];
$pass=$_POST['Password'];
$email=$_POST['Email'];
$phno=$_POST['Phone'];
$wrk=$_POST['Work'];
$sql="INSERT INTO reg_emply(Name,Password,Email,Phone,Work)VALUES('$fname','$pass','$email','$phno','$wrk')";
if(mysqli_query($conn,$sql))
{
    echo "record created Succesfully";
}
else
{
    echo "Error:".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br><input type="submit" value="Back to Home Page" name="submit">
</center>
</body>
</html>