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

    <?php

    //sortowanie
    $tab = array(10,1,100,-4,5,7);

    function show($x)
    {
      foreach ($x as $key => $value)
      {
        echo "$key: <strong> $value </strong>";
      }
      echo "<br/>";
    }

    echo "Tablica liczb: "; show($tab); echo "<hr/>";

#################################################################
    //niemalejąco
    sort($tab);
    echo "Niemalejąco: "; show($tab); echo "<hr/>";

    //malejąco
    rsort($tab);
    echo "Malejąco: "; show($tab); echo "<hr/>";

    //tablica asocjacyjna
    $tabAssoc = array (
      "surname" => "Anna",
      "name" => "Nowak",
      "age" => "18",
      "city" => "Poznań"
    );

    show($tabAssoc); echo "<hr/>";
    asort($tabAssoc);
    show($tabAssoc); echo "<hr/>";
    arsort($tabAssoc);
    show($tabAssoc); echo "<hr/>";

    ksort($tabAssoc); //sortuje według klucza
    show($tabAssoc); echo "<hr/>";
    krsort($tabAssoc); // sortuje odwrotnie według klucza
    show($tabAssoc); echo "<hr/>";

    var_dump($tabAssoc); echo "<br/>";
    print_r($tabAssoc); echo "<br/>";
    echo "<hr/>";

    echo "<pre>"; // czytelne wyświetlenie tablicy / preformatowana / zwraca uwage na tab,spacje
      print_r($tabAssoc);
    echo "</pre>";


     ?>

  </body>
</html>
