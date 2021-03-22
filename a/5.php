<html>
    <body>
        <form method="POST" action="6.php">
            <center>

                <?php

                    include_once'1.php';

                    $id= $_POST['up'];

                    $sql = "SELECT * from a1 where bname ='$id'";

                    $result = mysqli_query($con,$sql);

                    if(mysqli_num_rows($result) > 0)
                    {
                        if($row = mysqli_fetch_assoc($result))
                        {
                            ?>
                            Name : <input type="text" value="<?php echo $row['bname'];?>" name="bname2">
                            <br><br>
                            Book Price : <input type="text" values="<?php echo $row['bprice']; ?>" name="bpri2">
                            <br><br>
                            BOok Quantity : <input type="text" values= "<?php echo $row['bquantity'];?>" name="bquan2">
                            <br><br>
                            <input type="submit" name="update">
                    <?php

                        }
                    ?>
                <?php
                    
                    }
                    else{
                        echo "no result";
                    }
                ?>
            </center>
        </form>
    </body>
</html>