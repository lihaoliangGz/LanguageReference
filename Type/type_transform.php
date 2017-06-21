<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$foo = "1";  // $foo 是字符串 (ASCII 49)
echo "$foo","\n";
$foo *= 2;   // $foo 现在是一个整数 (2)
echo "$foo","\n";
$foo = $foo * 1.3;  // $foo 现在是一个浮点数 (2.6)
echo "$foo","\n";
$foo = 5 * "10 Little Piggies"; // $foo 是整数 (50)
echo "$foo","\n";
$foo = 5 * "10 Small Pigs";     // $foo 是整数 (50)
echo "$foo","\n";

//自动转换为 数组 的行为目前没有定义。
//由于 PHP 支持使用和数组下标同样的语法访问字符串下标，以下例子在所有 PHP 版本中都有效：
$a="car";
$a[0]="b";
echo "$a","\n";
echo "$a[1]","\n\n";

$foo=10;
$bar=(boolean)$foo;
echo "$bar","\n";
var_dump($bar);

//将字符串文字和变量转换为二进制字符串： 
$string="binary string";
$binary=(binary)$string;
var_dump($binary);
echo "$binary\n";
$binary=b"binary string";
var_dump($binary);
echo "$binary\n";

//可以将变量放置在双引号中的方式来代替将变量转换成字符串：
$foo = 10;            // $foo 是一个整数
var_dump($foo);
$str = "$foo";        // $str 是一个字符串
var_dump($str);
$fst = (string) $foo; // $fst 也是一个字符串
var_dump($fst);