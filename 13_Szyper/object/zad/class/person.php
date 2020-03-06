<?php
class Person
{
  public $name;
  public $surname;
  public $birthday;
  public $city;


  public function setAll($name,$surname,$birthday,$city)
  {
      $this->name=$name;
      $this->surname=$surname;
      $this->birthday=$birthday;
      $this->city=$city;
  }
  public function getAll()
  {
    echo <<<SHOW
    Imię i Nazwisko: $this->name $this->surname <br>
    Data Urodzenia: $this->birthday <br>
    miejscowość: $this->city
SHOW;
  }
}
  $person = new Person();

  $person->setAll("Bartosz","Banasiak","21-07-2002","Poznan");
  $person->getAll();


 ?>
