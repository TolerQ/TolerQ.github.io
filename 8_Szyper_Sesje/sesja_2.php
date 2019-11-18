<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    Sesja_2 <br/> <hr/>
    Witamy

    <style>
      body
      {
        background-color: #111; color: #777;
      }
    </style>

    <?php

    echo $_SESSION["name"];

     ?>

    na stronie

     <?php

     echo "<br/>";
     echo "Identyfikator sesji: ", session_id();

      ?>

      <br/><a href="./sesja.php"> Sesja </a>

  </body>
</html>
