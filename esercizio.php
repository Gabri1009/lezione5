<!-- //scrivi uno script per stampare la data in diversi formati -->

<?php


$today = date("y.m.d");
echo $today ."<br>";

$today = date('y-m-d');
echo $today."<br>";
$today = date('Y/m/j');
echo $today."<br>";





$annoCorrente = date("Y");


$nomeAzienda = "MYCOMPANY s.r.l.";


echo "© " . "copyright" . $annoCorrente . " " . $nomeAzienda;

echo "<hr>";