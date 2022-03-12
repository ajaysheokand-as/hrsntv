<?php 
require_once('../../config/conn.php');
require_once('../functions.php');
$con = $conn;
$err = "";
$pass = "";
$token = "";
$device_type = "";
$status = true;
define('ROOTPATH', dirname(__FILE__));

$file = fopen("../logs/" . date("d-m-y") . ".txt", "a");

fwrite($file, (date('H:i:s') . "  mail/mail.php," . file_get_contents('php://input') . "\n"));

$response = "";
// Request must be is using the POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Content-Type:application/json");
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (isset($data['name']) && isset($data['mobile']) && isset($data['mail']) && isset($data['password'])) {
        $name = $data['name'];
        $mobile = $data['mobile'];
        $mail = $data['mail'];
        $password = $data['password'];
        $otp = $data['otp'];

        function sanitize_my_email($field) {
            // $field = filter_var($field, FILTER_SANITIZE_EMAIL);
            // if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
            //     return true;
            // } else {
            //     return false;
            // }
        }
        $to_email = 'ajaysheokand.as@gmail.com';
        $subject = 'Testing PHP Mail';
        $message = 'This mail is sent using the PHP mail ';
        $headers = 'From: 85ajaysheokand@gmail.com';
        //check if the email address is invalid $secure_check
        $secure_check = sanitize_my_email($to_email);
        if ($secure_check == false) {
            echo "Invalid input";
        } else { //send email 
            mail($to_email, $subject, $message, $headers);
            echo "This email is sent using PHP Mail";
        }
       
    } else {
        $err = "set key as -> `name` and `mobile` and `email` and `passowrd` ";
    }
} else {
    $err = "Header should be POST";
}
sendPostRes($response, $err);
$device =  ($_SERVER['SystemRoot']);
$platform =  ($_SERVER['REMOTE_ADDR']);

