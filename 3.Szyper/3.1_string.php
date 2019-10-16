<?php
 $text = <<< T
 zsl -
 Zespół
 Szkół
 Łączności
T;
echo "Przed wywowłaniem funkcji nl2br:<br> $text";
echo "<br><br>Po wywołaniu funkcji nl2br:<br>";
echo nl2br($text),'<br>';
$text = 'jaNUSz';
//zamiana na małe litery
echo strtolower($text),'<br>';
 //zamiana na duże litery
 echo strtoupper($text),'<br>';
$text = 'rAZ DWA trzy';
//zamiana 1 litery na duza
echo ucfirst($text),'<br>'; //RAZ DWA trzy
//zamiana wszystkich 1 liter na duze
echo ucwords($text),'<br>'; //RAZ DWA Trzy
//
$text = 'jaNuSz';
$firstLetter = substr($text,0,1);
echo $firstLetter;
$lateLetter = substr($text,1);
echo $lateLetter;
 ?>
