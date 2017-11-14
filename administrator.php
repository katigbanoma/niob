<?php

    session_start();
    $username = $_SESSION['myusername'];
    if ( !$username ) {
        echo "<script>alert('You need to be logged in to access this portal'); location.href = 'index.php';</script>";
    }else {
        echo "Welcmoe Admin -> " . $username;
    }