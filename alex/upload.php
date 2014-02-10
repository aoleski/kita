<?php
include "config.php";

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="'.$uploadRealm.'"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
} else {
	if ($_SERVER['PHP_AUTH_USER'] == $uploadUser && $_SERVER['PHP_AUTH_PW'] == $uploadPassword)
	{

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
}

?>