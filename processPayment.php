<?php
require 'dbconnect.php';
session_start();

if (isset($_POST['paymentStatus']) && isset($_POST['paymentType'])) {
    $result = array();

    $formData = $_POST;
    $status = stripslashes($formData['paymentStatus']);
    $paymentType = stripslashes($formData['paymentType']);
    $reference = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
    $description = "Payment for '$paymentType'";
    if (isset($_POST['grade'])) {
        $grade = $_POST['grade'];
        $description = "Payment for '$paymentType', '$grade'";;
    }

    if (isset($_POST['amount'])) {
        $amount = stripslashes($formData['amount']);
    }
    else {
        $amount = 4000.0;
    }

    if ($status == 'no') {
        // create user account
        $full_name = stripslashes($formData['full_name']);
        $phone = stripslashes($formData['phone']);
        $username = stripslashes($formData['username']);

        $userQuery = "SELECT * FROM `users` WHERE username = '$username'";
        $result = mysqli_query($connection, $userQuery);

        if (mysqli_num_rows($result) == 0) {
            $hashed_password = md5($phone);
            $userQuery = "INSERT INTO `users` (username, password,created_at, updated_at) VALUES ('$username', '$hashed_password', CURRENT_DATE, CURRENT_DATE )";
            $user = mysqli_query($connection, $userQuery);

            if (!$user) {
                echo "<script>alert('Error!, Account not created.'); location.href='index.php';</script>";
                die();
            }
        }
    }

    else {
        $reg_no ='R00'. stripslashes($formData['reg_no']);
        $regQuery = "SELECT * FROM `niob_info` WHERE reg_no = '$reg_no'";
        $result = mysqli_query($connection, $regQuery);
        $row = mysqli_fetch_assoc($result);

        if (!$row) {
            echo "<script>alert('Invalid user account'); location.href='index.php';</script>";
            die();
        }
        $info = (object)$row;
        $username = $info->username;
    }
    
    $paymentQuery = "INSERT INTO `payment_reference` (username, amount, reference, created_at, updated_at) VALUES ('$username', '$amount', '$reference', CURRENT_DATE, CURRENT_DATE )";
    $pq = mysqli_query($connection, $paymentQuery);

    if ($pq) {
        $postData =  array('email' => $username, 'amount' => $amount, "reference" => $reference);
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
        $request = curl_exec($ch);

        curl_close($ch);

        if ($request) {
            $result = json_decode($request, true);
            $res = (object)$result;
            if ($res->status == false) {
                $msg = $res->message;
                echo "<script>alert('$msg'); location.href='paymentPage.php';</script>";
                die();
            }
            header("Location: ".$result['data']['authorization_url']);
            exit();
        }
    }
    echo "<script>alert('Reference not created!'); location.href='paymentPage.php';</script>";
    die();

}
echo "<script>alert('One or more fields isnt correct or not field'); location.href='paymentPage.php';</script>";
die();
