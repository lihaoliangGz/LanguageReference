<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MyClass{
    const BAR="something class";
}

//合法与非法的常量名
define("FOO", "something");
define("FOO2", "something else");
define("FOO_BAR","something more");
function test(){
    define("FUNC", "something function");
}

echo FOO,"\n";
test();//必须先调用方法
echo FUNC,"\n";
echo MyClass::BAR;