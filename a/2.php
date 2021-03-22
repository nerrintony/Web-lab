<?php

    if(isset($_POST['add']))
    {
        include_once'1.php';

        $bookName = $_POST['bookn'];
        $bookPrice = $_POST['bookp'];
        $bookQuantity = $_POST['bookq'];

        $sql = "INSERT into a1(bname,bprice,bquantity) values ('$bookName','$bookPrice','$bookQuantity')";

        if(mysqli_query($con,$sql))
        {
            echo "inserted";
        }
        else
        {
            echo " NOT inserted ".$sql."".mysqli_error($con);
        }
        mysqli_close($con);
    }
    else
    {
?>

<html>
    <head>
        <title>
            Library Book Insertion
        </title>
        <link rel="stylesheet" href="abc.css">
    </head>

    <body>
        <br><br>
        <center>
            <div class="a2">
                <div class="a1">Insert Book Details</div>
                <br><br>
                <form method="POST" action="">
                    Book Name : <input type="text" name="bookn">
                    <br><br>
                    Book Price : <input type="text" name="bookp">
                    <br><br>
                    Book Quantity : <input type="text" name="bookq">
                    <br><br>
                    <input type="submit" name="add">
                </form>
            </div>
            
<?php
    }
    ?>
        </center>
    </body>
</html>