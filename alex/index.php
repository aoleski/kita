<?php
include "config.php";

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="' . $uploadRealm . '"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}


$loginOK = $_SERVER['PHP_AUTH_USER'] == $uploadUser && $_SERVER['PHP_AUTH_PW'] == $uploadPassword;
if (!$loginOK) {
    echo '<html>
<body>
<h3>Login not OK. Close browser and try again</h3>
</body>
</html>';
    exit;
}

?>
<html>
<head>
    <title>File Upload </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h3>Salut Alex, sper sa mearga </h3>

<form action="upload.php" method="POST"
      id="myForm" enctype="multipart/form-data">
    <input type="file" name="file"><br>
    <input type="submit" value="Start Upload">
</form>


</body>
</html>


