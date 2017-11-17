<?php 
session_start();

session_destroy();

// header("Location: index.php");

echo "<script>alert('You are now logged out and wont be able to access payments portal till you login'); location.href='index.php';</script>";


?>
