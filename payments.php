    <?php
    session_start();

    $tbl_name = "user";

    $username = $_SESSION['myusername'];

    if (!$_SESSION["myusername"]) {
        echo "<script>alert('You need to be logged in before you can access the payment portal!'); location.href='index.php';</script>";
    }else{

        $adminselect = "SELECT access FROM $tbl_name WHERE username = '$username'";
        $result = mysqli_query($connect, $adminselect);

        while($row = mysqli_fetch_assoc($result))
        {
        $access = $row['access'];
        }

        if ($access == 1) {
            echo "<script>alert('Welcome Administrator!'); location.href='admin.php';</script>";
        }else{
            // echo "<script>alert('Welcome Normal User!'); location.href='payments.php';</script>";
            
            echo "Welcome Normal User: ";
            echo $_SESSION["myusername"]. '<br>';
            echo "Payments would be available soon<br>";
            echo "<a href='logout.php'>loguot.php</a>";

        }
        
    }

    ?>