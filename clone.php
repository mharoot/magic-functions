<?php
class Student
{
    static $idx = 0;
    public $id;
    public $name;

    public function __construct($name) {
        $this->id = ++self::$idx;
        $this->name = $name;
    }

    public function __clone() {
        $this->id = ++self::$idx;
    }
}

class Classroom
{
    public $student1;
    public $student2;
    function __clone()
    {
        // Force a copy of this->object, otherwise
        // it will point to same object.
        $this->student1 = clone $this->student1;
    }
}

$class = new Classroom();

$class->student1 = new Student("John Smith");
$class->student2 = new Student("Kevin Smith");

$class2 = clone $class;

$class2->student2 = new Student("Samantha Clark");


print("<p>Original Object: Classroom Original Teacher's Choice:</p>");
print_r($class);

print("<p>Cloned Object: Classroom Secondary Choice Similary to Original Teacher's Choice</p>");
print_r($class2);

?>