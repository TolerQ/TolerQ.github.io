<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
  </head>
  <body>
<?php

//skrypt 1

    $connect = new mysqli("localhost","root","","sklep1");
    $sql = "SELECT `nazwa` FROM `towary` WHERE `promocja`=1";

    $result = mysqli_query($connect,$sql);

    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<li>$row[nazwa]</li>";
    }
    echo "</ul>";

    ?>

    <form method="post">
      <select name="towar">
        <option value="Gumka do mazania">Gumka do mazania</option>
        <option value="Cienkopis">Cienkopis</option>
        <option value="Pisaki 60szt.">Pisaki 60szt.</option>
        <option value="Markery 4szt.">Markery 4szt.</option>

      </select>
      <input type="submit" name="button" value="WYBIERZ">
    </form>

    <?php
    //skrypt 2
    if (isset($_POST["towar"])) {
      $towar = $_POST["towar"];
    //  echo $towar;

      $sql = "SELECT `cena` FROM `towary` WHERE `nazwa`='$towar'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_assoc($result);

      echo round($row["cena"] * 0.85, 2);


    }




      mysqli_close($connect);
     ?>

  </body>
</html>
