<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    </form>
  </body>
</html>
<?php
if (!empty($_POST['imie']) && !empty($_POST['kraj'])) {
  $imie = $_POST['imie'];
  $kraj = $_POST['kraj'];
  switch ($kraj) {
    case 'PL':
    $kraj = 'Polska';
    break;
      case 'FR':
      $kraj = 'Francja';
      break;
  }
  $ilosc = strlen($imie);
  echo "Dane pobrane od użytkownika: $imie, ilość liter: $ilosc, kraj: $kraj<br>";
$poprawne = ucfirst(strtolower(substr(trim($imie),0,10)));
  $ilosc = strlen($imie);
echo "Długość imienia po wyczyszczeniu z białych znaków: $ilosc, imię: $poprawne,
$kraj";
}else{
require('./znikający.php');}
?>
