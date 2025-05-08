<?php

class A {
    public function greet() {
        echo "Hello from A<br>";
    }
}
class B extends A {
    public function greet() {
        echo "Hello from B<br>";
    }
}
$objA = new A();
$objB = new B();
$objA->greet();
$objB->greet();

echo "<br>";
?>