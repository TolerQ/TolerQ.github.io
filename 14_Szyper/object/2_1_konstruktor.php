<?php
class Person{
  private $name;

  public function setName($x){
    $this->name = $x;
  }

  public function getName(){
    return $this->name;
  }
}

  $obj = new Person();

  $obj->setName("Jan");
  echo $obj->getName();

  //data urodzenia nazwisko miasto
  //konstruktor dla nazwiska miasta imie
  //dodanie metody wyswietlacjacej wszystkie dane (heredoc)
  //Imie i nazwisko: ..., miasto: ..., Data urodzina: ...
 ?>
