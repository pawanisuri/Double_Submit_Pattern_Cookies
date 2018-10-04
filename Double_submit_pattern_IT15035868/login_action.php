<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/19/2018
 * Time: 10:28 PM
 */

$username = $_POST['uname'];
$password = $_POST['pswrd'];
session_start();
if(($username=="admin") && ($password=="admin"))
{
    $cookie_name = "admin";
    // $cookie_value =session_id();
    $csrf_token=base64_encode(openssl_random_pseudo_bytes(32));
    setcookie($cookie_name, $csrf_token, time() + (86400 * 30), "/"); // 86400 = 1 day
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie is not set";
    } else {
       
        echo "<script> location.href='main.php'; </script>";
    }
}
else
{
    echo 'Your not in';
}
