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

fwrite($file, (date('H:i:s') . "  news/add.php," . file_get_contents('php://input') . "\n"));

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
    if (isset($data['yt']) && isset($data['title'])) {
        $title = $data['title'];
        $yt = ($data['yt']);
        $category = ($data['category']);
        $description = ($data['description']);


        $sql = "INSERT INTO `contents`( `content_title`,  `category`, `content_text`, `content_yt`) values('$title','$category','$description','$yt')";
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
        $err = "set key as -> `title` and `yt` ";
    }
} else {
    $err = "Header should be POST";
}
sendPostRes($response, $err);
