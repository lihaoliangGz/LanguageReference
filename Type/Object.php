<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//对象初始化
class A{
    function foo(){
        echo "Doing foo","\n";
    }
}

$obj=new A;
$obj->foo();

//转换为对象
$obj1=(object)array("foo"=>"bar",1=>"first");
var_dump($obj1);
var_dump($obj1->foo);
var_dump(isset($obj->{'1'}));
//var_dump($obj1->{'1'});
var_dump(key($obj1));

//如果其它任何类型的值被转换成对象，将会创建一个内置类 stdClass 的实例。如果该值为 NULL，则新的实例为空。
$obj2=(object)"ciao";
//$obj2=(object)"apple";
var_dump($obj2);
echo $obj2->scalar,"\n";
//echo $obj2->o;

$obj3=(object)NULL;
var_dump($obj3);
//echo $obj3->scalar,"\n";


