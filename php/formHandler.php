<?php
if(isset($_POST['day']) && isset($_POST['meal'])) {
    $data = $_POST['day'] . '-' . $_POST['meal'] . "\r\n";
    $ret = file_put_contents('mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
?>
