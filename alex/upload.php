<?php
include "config.php";

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="' . $uploadRealm . '"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}


$loginOK = $_SERVER['PHP_AUTH_USER'] == $uploadUser && $_SERVER['PHP_AUTH_PW'] == $uploadPassword;
if (!$loginOK) {
    echo 'Login not OK. Close browser and try again';
    exit;
}


$ip = $_SERVER['REMOTE_ADDR'];

if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
    error_log($ip . "  error: " . $_FILES["file"]["error"], 1, $mail_ana);
} else {

    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    $size = formatSizeUnits($_FILES["file"]["size"]);
    echo "Size: " . $size . "<br>";

    $target_path = dirname(__FILE__) . '/';
    $target_path = $target_path . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
        echo "Copied from " . $_FILES["file"]["tmp_name"] . " to  " . $target_path;
        error_log($ip . " uploaded " . $target_path . " size " . $size, 1, $mail_ana);

        echo '<p> Mersi!</p>';
    } else {
        echo "move uploaded_file failed from " . $_FILES["file"]["tmp_name"] . " to  " . $target_path;
        error_log($ip . " - move_uploaded_file failed from " . $_FILES["file"]["tmp_name"] . " to  " . $target_path, 1, $mail_ana);

    }


}
?>
