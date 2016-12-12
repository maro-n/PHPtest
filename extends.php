<?php

class A {
  protected $ext = 0;

  function count(){
    $this->ext += 1;
    echo $this->ext."\n";
  }
}

class B extends A{
  function view(){
    echo $this->ext;
  }
}

$b = new B();
$b->count();

$a = new A();
$a->count();

?>
