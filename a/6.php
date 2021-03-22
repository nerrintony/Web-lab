<html>
    <body>
        <form method="POST" action="2.php">
            <center>
                <?php

                    include_once'1.php';

                    if(isset($_POST['update']))
                    {
                        $bn = $_POST['bname2'];
                        $bp = $_POST['bpri2'];
                        $bq = $_POST['bquan2'];

                        $sql = "UPDATE a1 set bname='$bn',bprice='$bp',bquantity='$bq' where bname='$bn'";

                        if(mysqli_query($con,$sql))
                        {
                            echo "Updated";
                        }
                        else
                        {
                            echo "Error" .$sql."".mysqli_error($con);
                        }
                        mysqli_close($con);
                    }
                ?>
            <br><br>
            <input type="submit" name="submit">
            </center>
        </form>
    </body>
</html> 
        