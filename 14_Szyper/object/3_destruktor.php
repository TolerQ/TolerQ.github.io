<?php
class Person{
    private $name;
    public function __construct(){
      echo "konstruktor<br>";
    }

    public function __destruct(){
      echo "destruktor<br>";
    }

  }
  echo "poczatek<br>";
  $obj = new Person();
  unset($obj);
  echo "koniec<br>";


 ?>
