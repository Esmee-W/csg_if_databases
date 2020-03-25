<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$waarde=9/10;
$kwad=pow($waarde,2);
$rec=1/$kwad;
$afgerond=round($rec,6);
$a=5;
$b=12;
$c=round(sqrt(pow($a,2)+pow($b,2)),3);
$rest=$b % $a;

echo "Het kwadraat van $waarde is $kwad.<br>
      Het omgekeerde daarvan is (afgerond:) $afgerond<br>";
echo "<br> Phytagoras waarbij a=$a en b=$b.<br>
      De lengte van de lange zijde, oftewel c is $c. <br>";
echo "<br> Als je b=$b deelt door a=$a, <br>
      dan heb je een rest van r=$rest.";

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>