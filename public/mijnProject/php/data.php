<?php

require('database.php');
require('filter.php');
$database = "project";

$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);



echo "<h2>RESULTAAT</h2>";
// Voer een query uit
$sql = "SELECT * FROM producten WHERE  type='Smeerbaar' ";

$sql = "SELECT * FROM producten WHERE  type='Strooibaar' ";


$records = mysqli_query($DBverbinding, $sql);
      
if (mysqli_num_rows($records) > 0) {
  
  while($record = mysqli_fetch_assoc($records)) {
    echo "<b>".$record["naam"]."</b> <br>";
  }
}
else {
  echo "0 resultaten";
}


mysqli_close($DBverbinding); 
?> 