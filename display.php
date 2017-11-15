<?php
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//GET file
$filename = $_GET["file_name"];

//set up a table, open the file, use fGET csv method to get data out of csv and add to table cells
echo "<html><body><table>";
$file = fopen("upload/".$filename, "r");
while (($data = fgetcsv($file)) !== false) {
    echo "<tr>";
    foreach ($data as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>";
}
//close the file
fclose($file);
echo "</table></body></html>";

?>

