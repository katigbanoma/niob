<?php
session_start();

if (!$_SESSION["myusername"]) {
    echo "<script>alert('You need to be logged in before you can access the payment portal!'); location.href='index.php';</script>";
}else{
    echo "Welcome: ";
    echo $_SESSION["myusername"]. '<br>';
    echo "Payments would be available soon<br>";
    echo "<a href='logout.php'>loguot.php</a>";
}


?>