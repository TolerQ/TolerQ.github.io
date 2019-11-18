<?php

  setcookie("country", "Polska");
  setcookie("car", "VW", time()+60*60*24); // ciasteczko znika po 1 dniu / zniknie po odświeżeniu
  // setcookie("car", "", time()-1);  // ciasteczko widoczne jednak nie ma wartości

 ?>
