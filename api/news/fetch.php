<?php
require_once('../../config/conn.php');
require_once('../functions.php');
$con = $conn;
$err = "";
$pass = "";
$token = "";
$device_type = "";
$status = true;


$file = fopen("../logs/" . date("d-m-y") . ".txt", "a");

fwrite($file, (date('H:i:s') . "  news/fetch.php," . file_get_contents('php://input') . "\n"));

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
    if (isset($data['from'])) {
        $from = $data['from'];
        // $yt = ($data['yt']);
        // $category = ($data['category']);
        // $description = ($data['description']);
        $to = $from + 9;

        $sql = "SELECT content_id as id,content_title as title,category,content_text as `description`,content_date as date,tags,content_author,remarks FROM `contents` WHERE status =1 LIMIT $from,$to";
        if ($res = mysqli_query($con, $sql)) {
            if (mysqli_num_rows($res) > 0) {
                $data = array();
                $i = 0;
                while ($row = mysqli_fetch_assoc($res))
                    $data[$i++] = $row;
                $response = array(
                    "success" => true,
                    "data" => $data,
                    "error" => ""
                );
            } else $err = mysqli_error($con);
        } else $err = mysqli_error($con);
    } else $err = "set key as -> `title` and `yt` ";
} else $err = "Header should be POST";

sendPostRes($response, $err);
