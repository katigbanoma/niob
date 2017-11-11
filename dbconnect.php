<?php
$connection = mysqli_connect('localhost', 'root', 'kini419,247');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'niob');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}