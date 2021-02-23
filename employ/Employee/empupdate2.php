<html>
 <head>
 <title> Update Data</title>
 </head>
<body bgcolor="#151515">
  <form method="post" action="empupdate3.php">
<center>


<?php
include_once 'conn.php';
$rid = $_POST['id'];
$sql = "SELECT * FROM reg_emply where id='$rid'";
$result=mysqli_query($conn,$sql);
	
		if (mysqli_num_rows($result) > 0) 
		{
	?>
<br><br>
  	
   

	<?php
	
	if($row = mysqli_fetch_assoc($result)) {
	?>
<div style="color : white">
<h1>Update Details</h1>
	<b>ID &nbsp&nbsp</b>
    	<input type="text" value="<?php echo $row["ID"]; ?>" name="ID"><br><br>

	<b>Name &nbsp&nbsp</b>
    	<input type="text" value="<?php echo $row["Name"]; ?>" name="Name"><br><br>

	<b>Password &nbsp&nbsp</b>
	<input type="text" value="<?php echo $row["Password"]; ?>" name="Password"><br><br>

	<b>Email &nbsp&nbsp</b>
	<input type="text" value="<?php echo $row["Email"]; ?>" name="Email"><br><br>

	<b>Phone &nbsp&nbsp</b>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    	</select>
	<input type="text" value="<?php echo $row["Phone"]; ?>" name="Phone"><br><br>

	<b>Work &nbsp&nbsp</b>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    	</select>
	<input type="text" value="<?php echo $row["Work"]; ?>" name="Work"><br><br>
</div>
	<input type="Submit" value="Update" name="submit" >


	<?php
	
	}
	?>

	

 	<?php
	}
	else{
   	 echo "No result found";
	}
	?>
</center>
</form>
 </body>
</html>
