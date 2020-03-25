<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$tekst="Ik heb een bijbaantje bij de Aldi. De Aldi betaalt goed.";
echo "$tekst";
$tekst=str_replace('Aldi','Albert Heijn',$tekst);
$tekst=strstr($tekst,"De");
$woorden=str_word_count($tekst);
echo '<h4>'.$tekst.'</h4>';
$lengte=strlen($tekst);
echo '<p><i>De string $tekst bestaat uit <b>'.$lengte.'</b> karakters.</i></p>';
echo '<p><i>De string $tekst bestaat uit <b>'.$woorden.'</b> woorden.</i></p>';
$tekst=substr($tekst,10,5);
echo '<p>'.$tekst.'</p>';
echo strrev($tekst).'<br>';

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>