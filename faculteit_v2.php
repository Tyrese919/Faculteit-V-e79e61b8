<?php

echo "Van welk getal wil je de faculteit weten?".PHP_EOL;
$faculteit = readline();
$totaal = 1;
$i=1;

while ($i <= ($faculteit-1)) {
  $i++;
  $totaal = $i * $totaal;
}

echo "dit is jou andwoord ", $totaal;

 ?>
