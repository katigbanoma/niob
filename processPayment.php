<?php

require 'dbconnect.php';

$result = array();
//Set other parameters as keys in the $postdata array

$formData = (object)$_POST;
$status = stripslashes($formData->status);
$paymentType = stripslashes($formData->payment_type);
$grade = stripslashes($formData->grade);
$amount = stripslashes($formData->amount);
$username = stripslashes($formData->email);

$reference = array_rand(str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1);

$userQuery = "SELECT * FROM `users` WHERE username = '$username'";
$result = mysqli_query($connection, $userQuery);

if ($status == 'no') {
    
    // create user account
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('This account already exists, select Registered Member option'); location.href='index.php';</script>";
        die();
    }

    $full_name = stripslashes($formData->full_name);
    $phone = stripslashes($formData->phone);

}

else {
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "<script>alert('Invalid user account'); location.href='index.php';</script>";
        die();
    }

    $user = (object)$row;
}

$payment =

$postData =  array('email' => 'saheedalbert@yahoo.com', 'amount' => 500000,"reference" => '7PVGX8MEk85tgeEpVDtD');
$url = "https://api.paystack.co/transaction/initialize";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($postData));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = [
    'Authorization: Bearer sk_test_a8b0897d183d6393821b6cad177f7a9cf0d28cf3',
    'Content-Type: application/json',

];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$request = curl_exec ($ch);

curl_close ($ch);

if ($request) {
    $result = json_decode($request, true);
    $res = (object)$result;
    if ($res->status == false) {
        $_SESSION['message'] = array('type' => 'error', 'message' => $res->message);
        header("Location: index.php");
        die();
    }
    var_dump($result);
    exit();
}

//header("Location: index.php");
//die();