<?php
//data
  echo date("Y"),"<br>";
  echo date("y"),"<br>";
  echo date("Y-M-D"),"<br>";
  echo date("Y-D-M"),"<br>";
  echo date("e");"<br>";
  echo date("F");"<br>";


  echo date("g"),"<br>";
  echo date("G"),"<br>";
  echo date("h"),"<br>";
  echo date("H"),"<br>";

  echo date("i"),"<br>";
  echo date("I"),"<br>"; //Czas letni(1) /zimowy(0)


echo date("j"),"<br>"; //dzien mies
echo date("l"),"<br>"; //dzien tyg
echo date("L"),"<br>"; //rok przestepny(1),nieprzestepny(0)
echo date("m"),"<br>"; //mies z 0 na poczatku
echo date("n"),"<br>"; //mies bez 0 na poczatku
echo date("O"),"<br>"; //przesuniecie czasu
echo date("o"),"<br>"; //rok
echo date("P"),"<br>"; //przesuniecie czasu
echo date("t"),"<br>"; //liczba dni w mies
echo date("T"),"<br>"; //strefa czasowa (CET)
echo date("U"),"<br>"; //czas ktory uplynal od 1970 w sekundach

echo date("s"),"<br>"; //sekundy
echo date("S"),"<br>"; //dni tygodnia
echo date("w"),"<br>"; //ktory dzien tyg
echo date("W"),"<br>"; //numer tygodnia
echo date("z"),"<br>"; //dzien w roku (liczony od 0) (trzeba dodac 1)

//getdate()

$data = getdate(); //pobiera date

echo "<pre>";
echo  print_r($data);
echo "</pre>";

$weekDay = date("D");

switch ($weekDay) {
  case "Fri":
    $weekDay = "Piatek";
    break;
    case 5:
      $weekDay = "Piatek";
      break;

}
echo "$weekDay","<br>";


//wyswietl na ekranie date i czas w formacie dzien:22 listopad 2019 godzina 19:46 dzien tygodnia piatek

$month = $data['month'];
switch ($month) {
  case 1:
    $month = "Poniedzialek";
    break;
    case 11:
      $month = "Listopad";
      break;

}


echo "data:".date("d").date("$month").date("Y")." ".date("H").":".date("h")." $weekDay"."<br>";

  ?>
