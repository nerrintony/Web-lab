<html>
<body>
<center>
<?php

    include_once'1.php';

    $sql ="SELECT * from a1";

    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0)
    {
        ?>
    <br><br>

    <table border="1">
        <tr>
            <th>Book Name</th>
            <th>Book Price</th>
            <th>Book Quantity</th>
        </tr>

        <?php
            $i=0;
            while($row = mysqli_fetch_assoc($result))
            {
                ?>

                <tr>
                    <td align="center">
                        <?php
                            echo $row["bname"];
                        ?>
                    </td>
                
                    <td align="center">
                        <?php
                            echo $row["bprice"];
                        ?>
                    </td>
                    
                    <td align="center">
                        <?php
                            echo $row["bquantity"];
                        ?>
                    </td>
                </tr>
            <?php

                $i++;
            }
            ?>
            </table>
    <?php
    }
    ?>
    <table>
        <tr><br></tr>
        <tr>
            <td><form method="POST" action="2.php" >
                <input type="submit" value="Add Book">
            </form></td>
        </tr>
        <tr>
            <td><form method="POST" action="4.php">
                <input type="submit" value="Delete Book">
                <input type="text" name="id">
            </form></td>
        </tr>
        <tr>
            <td><form method="POST" action="5.php">
                <input type="submit" value="update Book">
                <input type="text" name="up">
            </form></td>
        </tr>
    </table>
</center>
</body>
</html>