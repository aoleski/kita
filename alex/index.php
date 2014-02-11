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
<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
        function fileSelected() {
            var file = document.getElementById('file').files[0];
            if (file) {
                var fileSize = 0;
                if (file.size > 1024 * 1024)
                    fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
                else
                    fileSize = (Math.round(file.size * 100 / 1024) / 100).toString() + 'KB';

                document.getElementById('fileName').innerHTML = 'Name: ' + file.name;
                document.getElementById('fileSize').innerHTML = 'Size: ' + fileSize;
                document.getElementById('fileType').innerHTML = 'Type: ' + file.type;
            }
        }

        function uploadFile() {
           // var fd = new FormData(this);
            //fd.append("file", document.getElementById('file').files[0]);
            file =  document.getElementById('file').files[0];
            var xhr = new XMLHttpRequest();
            xhr.upload.addEventListener("progress", uploadProgress, false);
            xhr.addEventListener("load", uploadComplete, false);
            xhr.addEventListener("error", uploadFailed, false);
            xhr.addEventListener("abort", uploadCanceled, false);
            xhr.open("put", "upload.php", true);
            xhr.setRequestHeader("X-File-Name", file.name);
            xhr.setRequestHeader("X-File-Size", file.size);
            xhr.send(file);
        }

        function uploadProgress(evt) {
            if (evt.lengthComputable) {
                var percentComplete = Math.round(evt.loaded * 100 / evt.total);
                document.getElementById('progress').innerHTML = percentComplete.toString() + '%';
            }
            else {
                document.getElementById('progress').innerHTML = 'unable to compute';
            }
        }

        function uploadComplete(evt) {
            /* This event is raised when the server send back a response */
            //alert(evt.target.responseText);
            document.getElementById("progress").innerHTML = evt.target.responseText;


        }

        function uploadFailed(evt) {
          //  alert("There was an error attempting to upload the file.");
            document.getElementById("progress").innerHTML = "There was an error attempting to upload the file: "+ evt;
        }

        function uploadCanceled(evt) {
            //alert("The upload has been canceled by the user or the browser dropped the connection.");
            document.getElementById("progress").innerHTML = "The upload has been canceled by the user or the browser dropped the connection." +evt;
        }
    </script>
</head>
<body>
<form id="form1" enctype="multipart/form-data" method="post" action="Upload.aspx">
    <div class="row">
        <label for="file">Select a File to Upload</label> <input type="file" name="file" id="file" onchange="fileSelected();"/>
    </div>
    <div  class="row" id="fileName"></div>
    <div class="row" id="fileSize"></div>
    <div class="row" id="fileType"></div>
    <div class="row">
        <input type="button" onclick="uploadFile()" value="Upload" />
    </div>
    <div id="progress"></div>
</form>
</body>
</html>


