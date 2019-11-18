<?php
  session_start(); // start sesji
  $_SESSION["name"] = "Janusz"; // przypisanie zmiennej
 ?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    Witamy

    <style>
      body
      {
        background-color: #111; color: #DDD;
      }
    </style>

    <?php

    echo $_SESSION["name"]; // wyświetlenie sesji

     ?>

    na stronie

     <?php

     echo "<br/>";
     echo "Identyfikator sesji: ", session_id(); // wyświetlenie id sesji

      ?>

      <br/><a href="./sesja_2.php"> Sesja2 </a>

  </body>
</html>
