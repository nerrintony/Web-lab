<html>
    <head><title>main.php</title></head>
    <body>
        <form action="" method="POST">
            <?php
            include_once 'conn.php';
            if(isset($_POST['submit']))
            {
                $staff=$_POST['staff'];
                $uname=$_POST['uname'];
                $pass=$_POST['pass'];
                $sql="INSERT INTO lib_login(staff,uname,pass)VALUES('$staff',$uname',$pass')";
                if(mysqli_query($conn,$sql))
                {
                    echo "Account Created";
                }
                else
                {
                    echo "Error:" .$sql."".mysqli_error($conn);
                }
                mysqli_close($conn);
            }
            ?>
            <br>
            <center><input type="submit" name="submit" value="Sign Up">
        </form>
    </body>
</html>