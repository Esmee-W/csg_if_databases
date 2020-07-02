<?php
$sqlToevoeging = $_GET["q"];
$sql = "SELECT * FROM producten".$sqlToevoeging;

require('database.php');
$database = "project";
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);


$records = mysqli_query($DBverbinding, $sql);
if (mysqli_num_rows($records) > 0) {  
  while($record = mysqli_fetch_assoc($records)) {
    echo "<div class='resultaat'><h2><img".$record["foto"]."></h2>";
    echo "<div class='tekstresultaat'><h3>".$record["naam"]."</h3>";
    echo "<div class='resultaat34'><h4>"."€".$record["prijs"]."</h4>";
    echo "<h5>".$record["gewicht"]." gram"."</h5></div>";
    echo "<h6>".$record["omschrijving"]."</h6></div></div>"; 
  }
}

else {
  echo "We zijn totaal van chocoladehagelslag. Dit is niet mogelijk!";
}

mysqli_close($DBverbinding); 
?> 