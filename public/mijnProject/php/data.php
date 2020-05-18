<?php
require('database.php');
$database = "project";
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);

$sql = "SELECT * FROM pruducten WHERE type='Smeerbaar'  ";
$records = mysqli_query($DBverbinding, $sql);
      
if (mysqli_num_rows($records) > 0) {
  // Voor elke rij uit de resultaattabel wordt een array aangemaakt
  while($record = mysqli_fetch_assoc($records)) {
    echo "<b>".$record["producten"]."</b> .<br>";
  }
}
else {
  echo "0 resultaten";
}
mysqli_close($DBverbinding);
?>