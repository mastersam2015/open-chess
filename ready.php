<?
$plik = fopen('ready.txt','r');
$tekst4=fgets($plik, 10000);
fclose($plik);

if(($tekst4==2 or $tekst4==0) and ($_GET["go"]==1)){
$tekst4=$tekst4+$_GET["go"];

$plik = fopen('ready.txt','w');
fputs($plik, $tekst4);
fclose($plik);
}


if(($tekst4==1 or $tekst4==0) and ($_GET["go"]==2)){
$tekst4=$tekst4+$_GET["go"];

$plik = fopen('ready.txt','w');
fputs($plik, $tekst4);
fclose($plik);
}
$plik = fopen('ready.txt','r');
$tekst4=fgets($plik, 10000);
fclose($plik);
echo $tekst4;
?>