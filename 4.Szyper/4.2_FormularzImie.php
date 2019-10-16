<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <input type="text" name="imie" autofocus autocomplete="off"><br><br>
      <input type="submit" name="przycisk" value="Potwierdź">



    </form>
  </body>
</html>
<?php
if (!empty($_POST['imie'])) {
  $imie = $_POST['imie'];
  $ilosc = strlen($imie);
  echo "Dane pobrane od użytkownika: $imie, ilość liter: $ilosc<br>";
//sanizytacja kodu(czyszczenie)
//usuwanie białych znaków(trim)
$poprawne = trim($imie);
//ograniczenie do 10 znaków funkcja (substr)
$poprawne = substr($poprawne, 0, 10);
$ilosc = strlen($poprawne);
//zamiana na małe litery (strtolower)
$poprawne = strtolower($poprawne);
//Pierwsza litera duza (ucfirst)
$poprawne = ucfirst($poprawne);
echo "Długość imienia po wyczyszczeniu z białych znaków: $ilosc, imię: $poprawne";
}
else{
echo "Wypełnij pole imie!";
}
 ?>
