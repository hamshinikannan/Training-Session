<?php
//interface definition
interface Animal {
  public function makeSound();
}
//class definition
class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

$animal = new Cat();
$animal->makeSound();
?>