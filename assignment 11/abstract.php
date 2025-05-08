<?php

abstract class Animal {
    abstract public function sound();
}
class Dog extends Animal {
    public function sound() {
        echo "Bark<br>";
    }
}
$dog = new Dog();
$dog->sound();

?>