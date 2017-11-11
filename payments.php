<?php
session_start();

if (!$_SESSION["username"]) {
    echo "<script>alert('You need to be logged in before you can access the payment portal!'); location.href='index.php';</script>";
}else{
    echo "Payments would be available soon";
}


?>