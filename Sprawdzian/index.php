<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bartosz Banasiak 3B1T</title>
  </head>
  <body>


    <form method="post">
      <input type="number" name="miasto" placeholder="Liczba 1-5">
      <input type="text" name="imie" placeholder="imie" autofocus>
      <input type="radio" name="color" value="R">R
      <input type="radio" name="color" value="G">G
      <input type="radio" name="color" value="B">B
      <input type="text" name="login"  placeholder="login">
      <input type="password" name="haslo" placeholder="haslo">
      <input type="submit" name="button" value="Zatwierdz">
    </form>

  </body>
</html>
<?php
if (isset($_POST['button'])){
  $imie = $_POST['imie'];
  $_SESSION['name1'] = $imie;
  $login = $_POST['login'];
  $haslo = $_POST['haslo'];
  $miasto = $_POST['miasto'];
  $color = $_POST['color'];
  switch ($miasto) {
    case '1':
      $miasto = 'Poznań';
      break;
    case '2':
      $miasto = "Warszawa";
      break;
    case '3':
    $miasto = "Krakow";
    break;
    case '4':
   $miasto = "Wroclaw";
      break;
   case '5':
     $miasto = "Gdansk";
   break;
   default:
   echo "Podano złą liczbe <br>";
   break;
  }
  switch ($color) {
    case 'R':
      $color = 'R';
      break;
    case 'G':
      $color = 'G';
      break;
    case 'B':
      $color = 'B';
      break;

  }

 echo "Klucz Wartosc <br>";
   $data = array(
   'Miasto' => $miasto,
   'Imie' => $imie,
   'Kolor' => $color
     );
   function showTable($x){
       foreach ($x as $key => $value) {
         echo "$key : $value <br>";
       }
     }
     showTable($data);

     $_SESSION['login'] = $login;
     $_SESSION['haslo'] = $haslo;

     $_SESSION['login'] = ucfirst($_SESSION['login']);
     $_SESSION['haslo'] = ucfirst($_SESSION['haslo']);
     echo "<br>";
     $dane = array($_SESSION['login'],$_SESSION['haslo']);

     function show($x)
     {
       $list = 1;
       foreach ($x as  $value) {
        echo $list++,". $value <br>";
       }
     }
     sort($dane);
     show($dane);

}




?>
