<?php

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        include_once'1.php';
        $un = $_POST['una'];
        $pa = $_POST['pas'];
        
        $sql = "SELECT * from a1 where bname ='$un'";

        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result) > 0)
        {
            if($row = mysqli_fetch_assoc($result))
            {
                if($row['bname'] == $un && $row['bprice'] == $pa)
                {
                    $_SESSION['bname'] = $row['bname'];
                    header("Location : 2.php");
                    die;
                }
                else
                {
                    echo "Wrong user name and password";
                }
            }
        }
    }
?>

<html>
    <body>
        <center>
            <br><br>
            <form method="POST">
                BookName : <input type="text" name="una">
                <br>
                Book Price as pass:
                <input type="password" name="pas">
                <br><br>
                <input type="submit" name="sub">
            </form>
        </center>
    </body>
</html>