<html>
    <head><title>Library</title></head>
    <body bgcolor="cyan">
        <?php
            include_once 'conn.php';
            $sql="SELECT * FROM lib_tab";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                ?>
        

        <br><br>
        <table border="2">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Quantity</th>
            </tr>
            <?php
            $i=0;
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                    <td><?php echo $row[]
            }
            }
        ?>
    </body>
</html>            