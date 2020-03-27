<?php
  class A{
    private $x;

    public function showA()
    {
      return "Funkcja z klasy A";
    }
  }

  class B extends A{
    public function showB(){
      return "Funkcja z klasy B";
    }
  }



  $objA = new A();
  //$objA->x = 10;
  //echo $objA->x;
  echo $objA->showA();
  //echo $objA->showB();

  $objB = new B();
  echo $objB->showB();
  echo $objA->showA();

 ?>
