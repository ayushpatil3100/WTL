<?php
class Person {
    public $name;
    function speak() {
        echo "I am $this->name<br>";
    }
}
class Teacher extends Person {
    public $subject;
}
$teacher = new Teacher();
$teacher->name = "sami";
$teacher->subject = "JS";
$teacher->speak();

?>