<?php
require_once('../config/conn.php');
require_once('functions.php');
$con = $conn;
$err = "";
$pass = "";
$token = "";
$device_type = "";
$status = true;


$file = fopen("logs/" . date("d-m-y") . ".txt", "a");

fwrite($file, (date('H:i:s') . "  news/fetch.php," . file_get_contents('php://input') . "\n"));

$response = "";
// print_r($_SERVER);
$device =  ($_SERVER['SystemRoot']);
$platform =  ($_SERVER['REMOTE_ADDR']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method
    header("Content-Type:application/json");
    $sql = "SELECT COUNT(b.content_yt) as content, (SELECT count(employee_id) from employee WHERE status =1) as employee from contents b WHERE b.status = 1";
    if ($res = mysqli_query($con, $sql)) {
        if (mysqli_num_rows($res) > 0) {
            $response = array(
                "success" => true,
                "data" => mysqli_fetch_assoc($res),
                "error" => ""
            );
        } else $err = mysqli_error($con);
    } else $err = mysqli_error($con);
} else $err = "Header should be POST";

sendPostRes($response, $err);
