<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

require('database.php');
$database = "postcode";
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);
$plaatsnamen = array();

$straat='Eshof';
$plaats='Eext';
echo "<h2>RESULTAAT</h2>";
$sql = "SELECT DISTINCT(plaats) FROM postcode WHERE straat='$straat' ORDER BY plaats ASC";
$records = mysqli_query($DBverbinding, $sql);

      
while($record = mysqli_fetch_assoc($records)) {
  //echo $record["plaats"].'<br>';
  array_push($plaatsnamen, $record["plaats"]);
}

/*foreach($plaatsnamen AS $plaatsnemen){
    echo $plaatsnemen.'<br>';
}*/
//echo $plaatsnamen.'<br>';
$straatnamen = array();
$sql = "SELECT DISTINCT(straat) FROM postcode WHERE plaats='$plaats' ORDER BY straat ASC";
$records = mysqli_query($DBverbinding, $sql);
while($record = mysqli_fetch_assoc($records)) {
        array_push($straatnamen, $record["straat"]);
    }

foreach($straatnamen AS $straten){
    $sql = "SELECT COUNT(*) AS AANTAL FROM postcode WHERE straat='$straten'";
    $records = mysqli_query($DBverbinding, $sql);
    while($record = mysqli_fetch_assoc($records)) {
        echo $straten."-".$record["AANTAL"]."<br>";
    }
}








mysqli_close($DBverbinding);  

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>