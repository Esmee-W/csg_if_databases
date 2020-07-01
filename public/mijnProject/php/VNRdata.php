<?php
$sqlToevoeging = $_GET["q"];
$sql = "SELECT * FROM producten".$sqlToevoeging;

require('database.php');
$database = "project";
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);


echo "<h2>RESULTAAT</h2>";
echo "<h5>$sql</h5>";

$records = mysqli_query($DBverbinding, $sql);
if (mysqli_num_rows($records) > 0) {  
  while($record = mysqli_fetch_assoc($records)) {
    echo "<h5>".$record["naam"]."</h5>";
  }
}
else {
  echo "0 resultaten";
}
mysqli_close($DBverbinding); 
?> 