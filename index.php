<?php
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//file is outputting form and using POST to send the file
echo('
<html>
    <body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="csv" />
        <input type="submit"/>
        </form>
        </body>
        </html>
        ');
?>