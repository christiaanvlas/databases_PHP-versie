<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$waarde=9/10;
$kwad=pow($waarde,2);
$rec=1/$kwad;
$afgerond=floor($rec*1000000)/1000000;
$a=4;
$b=2;
$c=sqrt(pow($a,2)+pow($b,2)) ;


echo "Het kwadraat van $waarde is $kwad.<br>
      Het omgekeerde daarvan is (afgerond:) $afgerond<br>";
echo "$c";

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>