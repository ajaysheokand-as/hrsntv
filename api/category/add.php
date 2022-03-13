<?php
require_once('../../config/conn.php');
require_once('../functions.php');
$con = $conn;
$err = "";
$pass = "";
$token = "";
$device_type = "";
$status = true;

// if (isset(getallheaders()['Device-Type']))
//     $device_type = getallheaders()['Device-Type'];

// $content_type = (getallheaders());
$file = fopen("../logs/" . date("d-m-y") . ".txt", "a");

fwrite($file, (date('H:i:s') . "  category/add.php," . file_get_contents('php://input') . "\n"));

$response = "";
// print_r($_SERVER);
$device =  ($_SERVER['SystemRoot']);
$platform =  ($_SERVER['REMOTE_ADDR']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method
    header("Content-Type:application/json");
    $data = $_REQUEST;
    if (isset($data['name']) ) {
        $name = $data['name'];

        $sql = "INSERT INTO `category`( `name`) values('$name')";
        if (mysqli_query($con, $sql)) {

            // print_r($arr);
            $response = array(
                "success" => true,
                "error" => ""
            );
        } else {
            $err = mysqli_error($con);
        }
    } else {
        $err = "send suitable parameters ";
    }
} else {
    $err = "Header should be POST";
}
sendPostRes($response, $err);
