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
$poprawne = ucfirst(strtolower(substr(trim($imie),0,10)));
  $ilosc = strlen($imie);
echo "Długość imienia po wyczyszczeniu z białych znaków: $ilosc, imię: $poprawne";
}
else{
echo "Wypełnij pole imie!";
}
 ?>
