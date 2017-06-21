<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//可变变量,一个可变变量获取了一个普通变量的值作为这个可变变量的变量名
$a = "hello";
$$a = "world";
echo "$a $$a", "\n"; //
echo "$a ${$a}", "\n"; //
echo "$a $hello", "\n"; //

//可变变量用于数组:


echo "====================\n";

//可变属性示例???????????
class foo {

    var $bar = 'I am bar.';
    var $arr = array('I am A.', 'I am B.', 'I am C.');
    var $r = 'I am r.';

}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo $foo->$bar . "\n";
echo $foo->$baz[1] . "\n";

$start = 'b';
$end = 'ar';
echo $foo->{$start . $end} . "\n";

$arr = 'arr';
echo $foo->$arr[1] . "\n";
echo $foo->{$arr}[1] . "\n";
