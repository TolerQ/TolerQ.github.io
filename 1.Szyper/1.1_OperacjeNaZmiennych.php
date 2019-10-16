<?php
  $potega = 2 ** 10;
  echo $potega,'<hr>';
//operatory bitowe: and &, or |, not ~, xor ^, >>, <<
  $x = 0b1010;
  $x = $x >> 1; //101 5
  $x = $x << 2; //10100 20
  echo $x;
  ################################
  $x = 1;
  $y = 1.0;
echo gettype($x),'<br>';
echo gettype($y),'<br>';
  if ($x == $y)
    echo 'Równe<br>';
  else
    echo 'Różne<br>';
    if ($x == $y)
      echo 'Identyczne<br>';
    else
      echo 'Różne<br>';
#################################
//$x = 10;
//$y = 100;
//$wynik = $x <=> $y;
//echo $wynik;
//to w php 7
####################################
   $x = 2;
   echo $x++; //2
   echo ++$x; //4
   echo $x; //4
   $y = $x++;
   echo $y; // 4
   $y = ++$x;
   echo $y; //6
   echo ++$y; //7
###########################################
//opratory rzutowania
//bool, int, float, string, array, object, unset
echo '<hr>';
$text1 = '123ssd';
$x1 = (int)$text1;
echo $x1,'<br>';
$x1 = (float)$x1;
echo $x1,'<br>'; //123
echo gettype($x1),'<br>'; //double
 $text2 = -1;
 $x2 = (bool)$text2;
 echo $x2,'<br>'; //1 - true, false
$x3 = (unset)$text2;
echo '<hr>',$x3; //false
echo gettype($x3);
//rozmiar typu integer
  echo PHP_INT_SIZE,'<hr>'; //8
$w;
//@ - operator ignorowania błędów
echo @$w;
echo @gettype($w); //NULL
$text = 'ZSŁ';
$text1 = '123';
echo is_string($text); //true
echo is_bool($text); //false
echo is_float($text); //false
echo 'INT:',is_int($text1),'<br>'; //false
echo is_null($text); //false
############################################
//zmienne superglobalne
//$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER
echo $_SERVER['SERVER_PORT'];
 ?>
