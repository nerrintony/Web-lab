<html>
<head><titlte>Book Insert</title><head>
<body bgcolor="green">
    <form action="main.html" method="post">
        <center>
        <?php
        include_once 'conn.php';
        if(isset($_POST['submit']))
        {
            $book=$_POST['b_name'];
            $author=$_POST['a_name'];
            $pub=$_POST['p_name'];
            $quan=$_POST['quantity'];
            $sql="INSERT INTO lib_tab(book_name,author_name,pub_name,quantity) VALUES('$book','$author','$pub','$quan')";
            if(mysqli_query($conn,$sql))
            {
                echo "Recorded";
            }
            else
            {
                echo "Error".$sql."".mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        ?>
        <br><br><input type="submit" value="Back to Home Page" name="submit">
        </center>
    </form>
</body>
</html>