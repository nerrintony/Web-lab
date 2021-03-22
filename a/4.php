<html>
    <body>
        <form method="POST">
            <center>

                <?php
                    include_once'1.php';

                    $id =$_POST['id'];
                    $sql = "DELETE from a1 where bname = '$id'";

                    if(mysqli_query($con,$sql))
                    {
                        echo "deleted";
                    }

                    else
                    {
                        echo "ERROR" .mysqli_error($con);
                    }
                    mysqli_close($con);
                ?>
            </center>
        </form>
    </body>
</html>