
<?php
include "config.php";

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="'.$uploadRealm.'"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
}


 $loginOK = $_SERVER['PHP_AUTH_USER'] == $uploadUser && $_SERVER['PHP_AUTH_PW'] == $uploadPassword ;
    if (!$loginOK)
    {
        echo '<html>
<body>
<h3>Login not OK. Close browser and try again</h3>
</body>
</html>';
        exit;
        }



if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES["file"])) {

    if ($_FILES["file"]["error"] > 0)
    {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {

        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";

        $target_path = dirname(__FILE__) . '/';
        $target_path = $target_path . basename( $_FILES['file']['name']);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path))
        {
            echo "Copied from ". $_FILES["file"]["tmp_name"]." to  " . $target_path;
        }
        else
        {
            echo "move_uploaded_file failed from ". $_FILES["file"]["tmp_name"]." to  " . $target_path;

        }

    }

}
?>
<html>
<head>
    <title>File Upload </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h3>Salut Alex,   sper sa mearga </h3>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST"
      id="myForm" enctype="multipart/form-data" >
     <input type="file" name="file"><br>
    <input type="submit" value="Start Upload">
</form>
</body>
</html>


