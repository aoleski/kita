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

    $filename = $_SERVER['HTTP_X_FILE_NAME'];
    $size = $_SERVER['HTTP_X_FILE_SIZE'];
    $out=false;
try {


    $in = fopen('php://input', 'r');
    if (empty($in) ||$in==false)
    {
        throw new Exception("Couldn't open php://input");
    }

    if (empty($_SERVER['HTTP_X_FILE_NAME']) )
    {
        throw new Exception('HTTP_X_FILE_NAME not set in request header');
    }
    $fileWithPath= $_SERVER['DOCUMENT_ROOT'] .'/'.$filename;
    $out = fopen($fileWithPath, 'wb');
    error_log($ip . " tried to open " . $fileWithPath . " - " . $out);
    if (empty($out) || $out==false)
    {
        throw new Exception("Couldn't open "+$filename.' operation result = '+$out);
    }
    while ($data = fread($in, 1024)) fwrite($out, $data);
    fclose($out);
    echo $filename. ' uploaded. Thanx!';
    $message= $ip . " uploaded " . $filename . " size " . $size. ' size on disk '.formatSizeUnits(filesize($fileWithPath));
    error_log($message);
    error_log($message, 1, $mail_ana);

} catch (Exception $e) {
    echo 'Greseala!.  Primesc  un mail in cazul asta asa ca abandoneaza upload-ul pana auzi de la mine ca am rezolvat greseala.';
    $message =   $ip . " upload " . $filename . " size " . $size." error: ".$e;
    $message= '   $_SERVER variables';
    while (list($var,$value) = each ($_SERVER)) {
        $message.= $var.'=' .$value.'; ';
    }
    error_log($message);
    error_log($message, 1, $mail_ana);
    fclose($out);

}



?>
