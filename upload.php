<?php
if (isset($_FILES['fajl'])){
  if ($_FILES['fajl']['type'] == "text/csv" || $_FILES['fajl']['type'] == "application/pdf"){
    print "<h1>Fájl</h1>";
    print "<ul>
        <li>TMP: " . $_FILES["fajl"]["tmp_name"] . "</li>
        <li>Type: " . $_FILES["fajl"]["type"] . "</li>
        <li>Size: " . $_FILES["fajl"]["size"] . " byte</li>
    </ul>";
  }
  else print "A <q>" . $_FILES['fajl']['type'] . "</q> fájl nem TXT és nem PDF!";
}
else print "Nincs feltöltött fájl vagy hiba történt a feltöltés során.";
?>