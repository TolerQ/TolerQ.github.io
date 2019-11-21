<?php
session_start();
$_SESSION['count'];
$cookie_name = "Username";

setcookie("r", time() + (60*60*24));
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
Witamy
<?php
if (!isset($_COOKIE[$cookie_name])) {
  echo "Ciacho : ".$cookie_name."nie jest ustawione";

    $_SESSION['count'] = 0;
}
  else
    {
      echo "<br/>Ciacho ".$cookie_name."jest ustawione! <br/>";
      echo "Ciacho to: ".$_COOKIE[$cookie_name]."<br/>";
        $_SESSION['count']++;
    }




echo 'Strona odczytana przez '.$_COOKIE[$cookie_name]." ".$_SESSION['count'].' razy w ciągu tej sesji';


 ?>
   </body>
 </html>
