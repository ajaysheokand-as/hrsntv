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

// if (isset(getallheaders()['Device-Type']))
//     $device_type = getallheaders()['Device-Type'];

// $content_type = (getallheaders());
$file = fopen("../logs/" . date("d-m-y") . ".txt", "a");

fwrite($file, (date('H:i:s') . "  user/login.php," . file_get_contents('php://input') . "\n"));

$response = "";
// print_r($_SERVER);
$device =  ($_SERVER['SystemRoot']);
$platform =  ($_SERVER['REMOTE_ADDR']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method
    header("Content-Type:application/json");
    $data = json_decode(file_get_contents('php://input'), true);
    // print_r($data);
    // condition to check request in json 
    // if(strpos($content_type, "application/json") !== false){
    if (isset($data['mobile']) && isset($data['password'])) {
        $mobile = $data['mobile'];
        $password = md5($data['password']);


        //     $category =  filter_var($data['category'], FILTER_SANITIZE_STRING);
        $sql = "SELECT `id` as userid FROM `logininfo` where `mobile` ='$mobile' and status = 1";
        $res = mysqli_query($con, $sql);
        if (mysqli_num_rows($res) > 0) {
            $sql = "SELECT `id` as userid FROM `logininfo` where `mobile` ='$mobile' and `password`='$password' and status=1";
            if ($result = mysqli_query($con, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    // print_r($arr);
                    $response = array(
                        "success" => true,
                        "token" => $arr[0]['userid'],
                        "error" => ""
                    );
                } else {
                    $err = "Please enter correct Password";
                }
            } else {
                $err = mysqli_error($con);
            }
        } else {
            $err = "No User found Contact to Administrator";
        }
    } else {
        $err = "set key as -> `mobile` and `password` ";
    }
} else {
    $err = "Header should be POST";
}
sendPostRes($response, $err);
