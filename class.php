<?php

class A{
  public $a = 0;

  public function init(){
    $a = 0;
  }

  public function increese(){
    $this->a += 1;
    echo $this->a."\n";
  }
}

$a = new A();
$a->init();

for($i = 0; $i < 100; $i++){
  $a->increese();
}

?>
