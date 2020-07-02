<?php
$sqlToevoeging = $_GET["q"];
$sql = "SELECT * FROM producten".$sqlToevoeging;

require('database.php');
$database = "project";
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);


echo "<h2>RESULTAAT</h2>";

$records = mysqli_query($DBverbinding, $sql);
if (mysqli_num_rows($records) > 0) {  
  while($record = mysqli_fetch_assoc($records)) {
    echo "<div class='demo'><h3>".$record["naam"]."</h3>";
    echo "<h4>"."€".$record["prijs"]."</h4>";
    echo "<h5>".$record["gewicht"]." gram"."</h5>";
    echo "<h6>".$record["omschrijving"]."</h6></div><br>";
  }
}
else {
  echo "0 resultaten";
}
mysqli_close($DBverbinding); 
?> 