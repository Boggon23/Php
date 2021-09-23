<?php
if(isset($_POST['name1']) && isset($_POST['name2'])) {
    $data = $_POST['name1'] . ';' . $_POST['name2']. "\n";
    $ret = file_put_contents("Accounts.txt", $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {  
        echo "$ret bytes written to file";
        header("Location: login.php");
    }
}
else {
    die('no post data to process');
}


?>