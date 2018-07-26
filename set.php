<?php
/**
 *  Protect Encapsulation of class object using magic function __set
 *  ---------------------------------------------------------------------------
 * It is important to understand that encapsulation can be very easily violated 
 * in PHP. 
 * 
 * Example of encapsulation violation:
 * 
 *  class ObjectA{}
 *  $ObjectA = new ObjectA();
 *  $ObjectA->b = 'boom';
 *  var_dump($ObjectA); // object(ObjectA)#1 (1) { ["b"]=> string(7) "boom" }
 * 
 * ---------------------------------------------------------------------------
 * Hence it is possible to add a propertie out form the class definition.
 * 
 * It is then a necessity in order to protect encapsulation to introduce __set()
 * in the class :
 * 
 **/
class ObjectB {

    // uncomment to protect encapsulation of this class
    
    // public function __set($name, $value){
    //     throw new Exception ('no');
    // }
}

$ObjectB = new ObjectB();
$ObjectB->b = 'boom';
var_dump($ObjectB); // object(ObjectB)#1 (1) { ["b"]=> string(7) "boom" }