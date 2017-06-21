<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//变量命名;
$var = 'Bob';
$Var = 'Joe';
echo "$var, $Var";      // 输出 "Bob, Joe"

//$4site = 'not yet';     // 非法变量名；以数字开头
$_4site = 'not yet';    // 合法变量名；以下划线开头
$i站点is = 'mansikka';  // 合法变量名；可以用中文

//赋值:
$foo = 'Bob';              // 将 'Bob' 赋给 $foo
$bar = &$foo;              // 通过 $bar 引用 $foo
$bar = "My name is $bar";  // 修改 $bar 变量
echo $bar,"\n";
echo $foo,"\n\n";                 // $foo 的值也被修改

//只有有名字的变量才可以引用赋值
$foo = 25;
$bar = &$foo;      // 合法的赋值
//$bar = &(24 * 7);  // 非法; 引用没有名字的表达式

function test(){
    return 25;
}

$bar=&test(); // 非法
echo "$bar","\n";

//未初始化变量的默认值
//布尔型变量默认值：FALSE
//整形、浮点型变量默认值：0
//字符串型变量默认值：空字符串
//数组变量默认值：空数组

//isset() 语言结构可以用来检测一个变量是否已被初始化。 
$a;
$x=array();
var_dump(isset($a));
var_dump(isset($x));

//变量范围:

