<?php
$argv;
$number = (string)$argv[1];
$s = "s";
$i = 0;
$pos = strpos($number, $s);
if ($pos == false){
    echo "zet een s na de tijd om aan te geven dat het over seconden gaat. ";
    exit();
} else {
    echo "de s is gevonden, hij staat op positie " . $pos;
}
$number = substr($number,0,-1);

echo "\n $number seconden";
?>