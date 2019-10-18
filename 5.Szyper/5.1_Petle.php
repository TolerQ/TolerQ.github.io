<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <form method="post">
      <input type="password" name="haslo">
    <input type="submit" name="button" value="">
      </form>
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php
//pętle
//wyświetl liczby parzyste z przedziału <1;15> w porządku malejącym
//for ($i=15; $i > 0 ; $i--) {
//if ($i %2==0) {
//  echo "$i";
//zrob tzw. choinkę
/*if(!empty($_POST['ilosc'])){
$ilosc = $_POST['ilosc'];
for ($i=1; $i <= $ilosc ; $i++) {
  for ($j=0; $j < $i ; $j++) {
    echo "*";
  }
  echo "<br/>";
}
}
//użtykownik podaje z klawiatury haslo , przynajmniej raz , ma 3 próby na odgadnięcie hasła
//po trzeciej nieudanej probie wyswietli sie komunikat , podales 3 razy bledne haslo
//jesli odgadnie haslo wczesniej to wyswietlamy komunikat "prawidłowe hasło" i wyswietlamy mu za ktorym razem odgadł
*/
if(!empty($_POST['haslo'])){
$haslo = $_POST['haslo'];}

 ?>
