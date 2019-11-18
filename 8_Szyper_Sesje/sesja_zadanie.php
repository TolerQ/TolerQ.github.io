<!--

Utwórz licznik odwiedzin na stronie
Wykorzystaj pliki cookie

Witamy na stronie pierwszy raz
lub
licznik odwiedzin

 -->
 <?php

    session_start();
    $_SESSION["licznik"]=licz();

  ?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <style>
      body
      {
        background-color: #111; color: #DDD;
      }
    </style>

    Witamy

    <?php

    $licz=0;

    function licz()
    {
       if (isset(setcookie("times")))
       {
         echo " pierwszy raz "; setcookie("times", $licz) $licz+=1;
       }
       else
       {
         setcookie("times", $licz);
       }
    }

     ?>

     na stronie!

  </body>
</html>
