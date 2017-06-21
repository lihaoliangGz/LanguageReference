<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function foo(&$var) {
    
}

foo($a); // $a is "created" and assigned to null

$b = array();
foo($b['b']);
var_dump(array_key_exists('b', $b)); // bool(true)

$c = new StdClass;
foo($c->d);
var_dump(property_exists($c, 'd')); // bool(true)

var_dump($b);
var_dump($c);

class foo {

    public $value = 42;

    public function &getValue() {
//        return ($this->value);
        return $this->value;
    }

}

$obj = new foo;
$myValue = &$obj->getValue(); // $myValue is a reference to $obj->value, which is 42.
$obj->value = 32;
echo $myValue,"\n\n";

$a=1;
$b=&$a;
unset($a);
//var_dump($a);
var_dump($b);
echo "\n\n";

?>

