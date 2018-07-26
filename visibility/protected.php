<?php
/**
 * Protected function PHP
 * 
 * The visibility of a property, a method or (as of PHP 7.1.0) a constant can 
 * be defined by prefixing the declaration with the keywords public, protected 
 * or private. ... Members declared protected can be accessed only within the 
 * class itself and by inheriting and parent classes.
 * 
 */


/**
 * Define MyClass
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; // Works
echo $obj->protected; // Fatal Error
echo $obj->private; // Fatal Error
$obj->printHello(); // Shows Public, Protected and Private