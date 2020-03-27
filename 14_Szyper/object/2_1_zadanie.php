<?php
//data urodzenia nazwisko miasto
//konstruktor dla nazwiska miasta imie
//dodanie metody wyswietlacjacej wszystkie dane (heredoc)
//Imie i nazwisko: ..., miasto: ..., Data urodzina: ...


class Person
{
    public $name;
    public $surname;
    public $birthday;
    public $city;

    function __construct($name, $surname, $city, $birthday)
    {
      $this->name=$name;
      $this->surname=$surname;
      $this->city=$city;
      $this->birthday=$birthday;
    }

     public function getAll()
     {
echo <<<SHOW
       Imie i nazwisko: $this->name $this->surname , miasto: $this->city , Data urodzenia: $this->birthday
SHOW;
}
}
$obj = new Person("Bartosz","Banasiak","Poznan","12.10.2002");

$obj->getAll();

 ?>
