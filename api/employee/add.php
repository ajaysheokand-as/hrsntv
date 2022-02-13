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

fwrite($file, (date('H:i:s') . "  reporter/add.php," . file_get_contents('php://input') . "\n"));

$response = "";
// print_r($_SERVER);
$device =  ($_SERVER['SystemRoot']);
$platform =  ($_SERVER['REMOTE_ADDR']);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method
    header("Content-Type:application/json");
    $data = $_REQUEST;
    // [reporterName] => 
    // [reporterDesignation] => 
    // [reporterArea] => 
    // [reporterAddress] => 
    // [reporterSex] => 
    // [inputEmail] => 
    if (isset($data['reporterName']) && isset($data['reporterDesignation']) && isset($data['reporterArea']) && isset($data['reporterAddress'])  && isset($data['inputSex'])  && isset($data['inputEmail']) && isset($data['inputMobile']) && isset($_FILES['inputImg'])) {
        $reporterName = $data['reporterName'];
        $reporterDesignation = ($data['reporterDesignation']);
        $reporterArea = ($data['reporterArea']);
        $reporterAddress = ($data['reporterAddress']);
        $inputEmail = ($data['inputEmail']);
        $reporterSex = ($data['inputSex']);
        $inputMobile = ($data['inputMobile']);
        $image = $_FILES['inputImg'];

        $res = processImage($image);
        if (!$res[0]) {
            die(sendPostRes("", $res['error']));
        }
        $img = $res['name'];
        $sql = "INSERT INTO `employee`( `employee_name`, `employee_mobile`, `employee_email`, `employee_address`, `employee_sex`, `employee_designation`, `employee_pic`) values('$reporterName','$inputMobile','$inputEmail','$reporterAddress','$reporterSex','$reporterDesignation','employee/$img')";
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
