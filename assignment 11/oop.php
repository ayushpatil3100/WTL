<?php
// Student Class
class Student {
    public $name, $age, $marks, $cgpa;

    function __construct($name, $age, $marks, $cgpa) {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
        $this->cgpa = $cgpa;
    }

    function display() {
        echo "Name: $this->name, Age: $this->age, Marks: $this->marks, CGPA: $this->cgpa<br>";
    }
    
}

$stud = new Student("Samiiiii", 21, 73, 8.02);
$stud->display();

// Static
class Counter {
    public static $count = 0;
    static function increment() {
        self::$count++;
    }
}
Counter::increment();
echo "Static Count: " . Counter::$count . "<br>";


?>
