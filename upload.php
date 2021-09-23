<?php
session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_SESSION["Username"]) . ".jpg";
$uploadwork = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));




if ($uploadwork == 0) {
  echo "Sorry, your file was not uploaded.";

} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$image= $_SESSION["Username"] . ".jpg"; 
$img="./uploads/".$image;
echo '<img src="./uploads/'.$image.'"/>';



?>
