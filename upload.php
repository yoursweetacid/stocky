<?php
session_start();
// Include the database configuration file
include 'bd.php';
$statusMsg = '';

// File upload path
$targetDir = "images/photos/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$text = $_POST["image_name"];
$tags = $_POST["tags"];
$hue = $_POST["hue"];
$id_user = $_SESSION["id_user"];

if ($hue >= 0 && $hue < 30){
    $hue = 'red';
} else if($hue >= 30 && $hue < 60){
    $hue = 'orange';
} else if($hue >= 60 && $hue < 90){
    $hue = 'yellow';
} else if($hue >= 90 && $hue < 120){
    $hue = 'yellow-green';
} else if($hue >= 120 && $hue < 150){
    $hue = 'green';
} else if($hue >= 150 && $hue < 180){
    $hue = 'turquoise';
} else if($hue >= 180 && $hue < 210){
    $hue = 'cyan blue';
} else if($hue >= 210 && $hue < 240){
    $hue = 'blue';
} else if($hue >= 240 && $hue < 270){
    $hue = 'violet';
} else if($hue >= 270 && $hue < 300){
    $hue = 'purple';
} else if($hue >= 300 && $hue < 330){
    $hue = 'magenta';
} else if($hue >= 330 && $hue < 360){
    $hue = 'crimson';
}

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $database->query("INSERT into images (file_name, uploaded_on, image_name, id_user, tags, hue) VALUES ('".$fileName."', NOW(), '$text', '$id_user', '$tags', '$hue')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header("Location: http://localhost/test.dev/stocky/index.php");
exit;
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>