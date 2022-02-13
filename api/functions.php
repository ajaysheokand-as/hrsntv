<?php
define("PATH", dirname(__FILE__));
//function  send response in post method
function sendPostRes($data, $error)
{
    if ($error != "") {
        $error = array(
            'success' => false,
            'error' => $error
        );
        echo json_encode($error);

        return;
    }

    echo json_encode($data);
}

function processImage($image, $path = "../../img/employee/")
{
    $filename = $image['name'];
    $tmp_path = $image['tmp_name'];
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp');
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    if (!in_array($ext, $valid_extensions)) return array(false, "error" => "valid image types 'jpeg', 'jpg', 'png', 'gif', 'bmp'");
    if ($image['size'] > 500000)
        return array(false, "error" => "!! size too big");

    if (move_uploaded_file($tmp_path, $path . $filename))
        return array(true, "name" => $filename);
    else
        return array(false, "error" => "!! file not uploaded");
}
