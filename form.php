<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fajl" id="fileToUpload">
  <input type="submit" value="Feltöltés" name="submit">
</form>

<?php

$myfile = fopen("data.csv", "r") or die("Unable to open file!");

print("<table border='1'>");

while(!feof($myfile)) {
    $line = fgets($myfile);
    if (trim($line) !== "") {
    echo '<tr>';
    $data = explode(';', trim($line));
    foreach ($data as $cell) {
        echo '<td>' . htmlspecialchars($cell) . '</td>';
    }
    echo '</tr>';
  }
}

print("</table>");

fclose($myfile);

?>


</body>
</html>
