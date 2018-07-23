<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/15/015
 * Desc: callable类型
 */

function my_callable_function(){
    echo "Hello World";
}

class MyClass{
    static function MyClassMethod(){
        echo "My Class Method";
    }
}

echo "<br/>";
call_user_func('my_callable_function');

echo "<br/>";
call_user_func(array('MyClass', 'MyClassMethod'));

$obj = new MyClass();
echo "<br/>";
call_user_func(array($obj,'MyClassMethod'));
echo "<br/>";
call_user_func('MyClass::MyClassMethod');
echo "<br/>";
echo "<br/>";

// Our closure
$double = function($a) {
    return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

// Use the closure as a callback here to
// double the size of each element in our
// range
$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);


//文档中使用的伪类型和伪变量
function my_function()  {
    echo "aaa"."<br/><br/>";
}

my_function();

//类型转换
$string = "binary string";
var_dump($string);
echo "<br/>";
$binary = (binary)$string;
var_dump($binary);
echo "<br/>";

class bar{
    protected $foo="foo";

    function my_function(){
        var_dump($this);
    }
}

$bar = new bar();
$bar->my_function();