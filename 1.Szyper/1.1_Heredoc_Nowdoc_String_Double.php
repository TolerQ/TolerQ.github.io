<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
$calkowita = 10;
$hex = 0xA; //10
$oct = 021;
$bin = 0b1011; //11
echo $bin;
//typ zmiennoprzecinkowy
//double
$x = 3.0;
//typ string
 $name = 'Janusz';
 //echo "Masz na imie $name";
 //echo 'Masz na imie $name<hr>';
 //składnia herdedoc
  $surname = 'Kowalski';
  echo <<< ETYKIETA
    Heredoc<br>
    Masz na imię: $name<br>
    Nazwisko: $surname<hr>
ETYKIETA;
 $text = <<< ETYKIETA
  Heredoc2<br>
  Masz na imię: $name<br>
  Nazwisko: $surname<hr>
ETYKIETA;
    echo $text;
//składnia nowdoc
$text = <<< 'E'
 Nowdoc<br>
 Masz na imię: $name<br>
 Nazwisko: $surname<hr>
E;
echo $text='Poznań';
echo "Zmienna o nazwie \$text ma wartość: $text<br>";
echo 'Zmienna o nazwie $text ma wartość:', $text";
     ?>
  </body>
</html>
