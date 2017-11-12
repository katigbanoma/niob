<?php
        session_start();

        require('dbconnect.php');
        
        $tbl_name = "user";

        $username = $_POST['username'];
        $password = $_POST['mem_password'];
        $login = $_POST['login_member'];

        

        if ( isset($_POST['login_member']) && isset($_POST['mem_password']) && isset($_POST['username']) ) {
            
            $username = stripslashes($username);
            $password = stripslashes($password);

            // $username = mysql_real_escape_string($username);
            // $password = mysql_real_escape_string($password);

            // var_dump($password);
            // exit();

            $loginquery = "SELECT * FROM $tbl_name WHERE username = '$username' and password = '$password'";
            $result = mysqli_query($connection, $loginquery);
    

            $count = mysqli_num_rows($result);
            
    
            if($count==1){
                $_SESSION["myusername"] = $username;
    
                echo "<script>alert('Welcome to payments portal ..!! '); location.href='payments.php';</script>";
                
                // header("location:payments.php");
                }
                else {
                // header("location:main.php");
                
                echo "<script>alert('Unable to login username or password incorrect!'); location.href='index.php';</script>";
                }
        }
        

     ?>