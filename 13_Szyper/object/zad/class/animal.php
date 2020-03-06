<?php
class Animal
{
  public $gatunek;
  public $kraj;
  public $waga;
  public $wzrost;
  public $ilosc_nog;


  function __construct( $gatunek, $kraj, $waga, $wzrost)
  {
  $this->ilosc_nog=4;
  $this->gatunek=$gatunek;
  $this->kraj=$kraj;
  $this->waga=$waga;
  $this->wzrost=$wzrost;
  }

  public function getAll()
  {
  echo <<<SHOW
  Gatunek: $this->gatunek<br>
  Kraj: $this->kraj<br>
  Waga: $this->waga<br>
  Wzrost: $this->wzrost<br>
  Ilosc_nog $this->ilosc_nog
SHOW;
  }
}

$Animal = new Animal("Pies","Polska",10,70);
$Animal->getAll();
 ?>
