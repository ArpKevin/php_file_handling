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

<?php
$unit = isset($_POST["unit"]) ? $_POST["unit"] : 0;
$name = isset($_POST["name"]) ? $_POST["name"] : "";
$price = isset($_POST["price"]) ? $_POST["price"] : 0;
$bool = isset($_POST["bool"]) ? $_POST["bool"] : "";

$muvelet = isset($_POST["muvelet"]) ? $_POST["muvelet"] : null;
?>

<form action="form.php" method="POST">
    <label for="unit">Egység:</label>
    <input type="text" name="unit" id="unit" autocomplete="off"> <br>

    <label for="name">Név:</label>
    <input type="text" name="name" id="name"> <br>

    <label for="price">Ár:</label>
    <input type="number" name="price" id="price" min="1"> <br>

    <label for="bool">Boolean:</label>
    <input type="number" name="bool" id="bool"> <br>

    <button name="muvelet">Hozzáad</button>
</form>

</body>
</html>
