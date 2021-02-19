
        
        
    <html>
    <head>
        <title>Employee Registration</title>
    </head>
    <body><br><br>


    <?php
        if(isset($_POST['new_e']))
        {
        include_once 'conn.php';
        
            $emp_name=$_POST['e_name'];
            $emp_num=$_POST['e_num'];
            $emp_mail=$_POST['e_mail'];
            $emp_phno=$_POST['e_phno'];
            $emp_job=$_POST['e_job'];

            $sql="INSERT INTO emp_tab(employ_name,employ_num,employ_mail,employ_phno,employ_job) values('$emp_name','$emp_num','$emp_mail','$emp_phno','$emp_job')";

            if(mysqli_query($conn,$sql))
            {
                echo "New Record Created<br>";
            }
            else
            {
                echo "Error" .$sql."".mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        else{
            ?>

            <form method="POST" action="emp.html">
            <table align="center">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="e_name"></td>
                </tr>
                <tr>
                    <td>Employee Number</td>
                    <td><input type="text" name="e_num"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="e_mail"></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type="text" name="e_phno"></td>
                </tr>
                <tr>
                    <td>Job Title</td>
                    <td><input type="text" name="e_job"></td>
                </tr>
                <tr>
                    <td rowspan="2"><input type="submit" name="new_e"></td>
                </tr>
            </table>
           
        </form>
        <?php
        }?>        
        <br><br>
        <input type="submit" name="sub" value="Done">
        </body>
</html>
