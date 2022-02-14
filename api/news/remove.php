<?php
require_once('../../config/conn.php');
require_once('../functions.php');
$con = $conn;
$err = "";
$pass = "";
$token = "";
$device_type = "";


$file = fopen("../logs/" . date("d-m-y") . ".txt", "a");

fwrite($file, (date('H:i:s') . "  news/remove.php," . file_get_contents('php://input') . "\n"));

$response = "";
// print_r($_SERVER);
$device =  ($_SERVER['SystemRoot']);
$platform =  ($_SERVER['REMOTE_ADDR']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method
    header("Content-Type:application/json");
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['newsId'])) {
        $newsId = $data['newsId'];
        $sql = "DELETE FROM `contents` WHERE content_id = $newsId";
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
        $err = "send required parameters";
    }
} else {
    $err = "Header should be POST";
}
sendPostRes($response, $err);
