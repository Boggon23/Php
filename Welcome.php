<!DOCTYPE html>
<html>
<body>
<?php




$read = fopen("Accounts.txt","r") or die("fail to open file");
$test = fread($read,filesize("Accounts.txt"));
$acc = explode("\n", $test);
$loggedin = false;

$i = 0;
foreach ($acc as $test2){
    $i =+ 1;
    $Sep = explode(";", $test2);


    if( $_POST["username"] == $Sep[0] && $_POST["password"] == $Sep[1] ) {
        echo "you have logged in";
        $loggedin = true;
        session_start();
        $_SESSION["Username"] = $_POST["username"];
        echo " ", $_SESSION["Username"];

        echo '<form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
        </form>';
    
    }   

}

if ($loggedin == false) {
    echo "Inccoret password or email";
}

$image= $_SESSION["Username"] . ".jpg"; 
$img="./uploads/".$image;
echo '<img src="./uploads/'.$image.'"/>';


?>


</body>
</html>