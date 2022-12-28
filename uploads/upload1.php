<?php
// var_dump($_FILES);
// move_uploaded_file($_FILES["Upload_file"]["tmp_name"],"upload/". $_FILES["Upload_file"]["name"]);
$folder_path = "uploads/";
// echo $_FILES["Upload_file"]["name"];
$file_path = $folder_path . basename($_FILES["file_uploads"]["name"]);
$flag_ok = 1;
$file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

// if (isset($file_path)){
//     $flag_ok = 0;
//     echo "image đã tồn tại.";
// }

$type = array("jpg", "png", "jpeg");
if (!in_array($file_type, $type)) {
    echo "image không hợp lệ";
    $flag_ok = 0;
}
$file_size = $_FILES["file_uploads"]["size"];
echo $file_size;
if ($file_size > 5000000) {
    echo "kích thước image không phù hợp. ";
    $flag_ok = 0;
}
if ($flag_ok == 0) {
    echo "Sorry file is not uploaded yet";
} else {
    if (move_uploaded_file($_FILES["file_uploads"]["tmp_name"], $file_path)) {
        echo "Image has uploaded successly";
    } else {
        echo "Sorry, there was an error uploading your file";
    
    }
}
?>