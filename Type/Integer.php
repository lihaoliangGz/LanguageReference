<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a1 = 1234; // 十进制数
$a2 = -123; // 负数
$a3 = 0123; // 八进制数 (等于十进制 83)
$a4 = 0x1A; // 十六进制数 (等于十进制 26)
$a5 = 0b11111111; // 二进制数字 (等于十进制 255)

echo $a1."\n";
echo $a2 . "\n";
echo $a3 . "\n";
echo $a4 . "\n";
echo $a5 . "\n";
echo PHP_INT_MAX."\n\n";
//echo PHP_INT_MIN."\n";//7.0.0以后版本使用

$a6=01234567;
$a7=0123456789;//PHP 7 以前的版本里，如果向八进制数传递了一个非法数字（即 8 或 9），则后面其余数字会被忽略。PHP 7 以后，会产生 Parse Error。 
echo $a6."\n";
echo $a7."\n";

//如果给定的一个数超出了 integer 的范围，将会被解释为 float。同样如果执行的运算结果超出了 integer 范围，也会返回 float。 
//Example #2 32 位系统下的整数溢出
$large_number = 2147483647;
var_dump($large_number);                     // int(2147483647)

$large_number = 2147483648;
var_dump($large_number);                     // float(2147483648)

$million = 1000000;
$large_number = 50000 * $million;
var_dump($large_number);                     // float(50000000000)

//Example #3 64 位系统下的整数溢出
$large_number = 9223372036854775807;
var_dump($large_number);                     // int(9223372036854775807)

$large_number = 9223372036854775808;
var_dump($large_number);                     // float(9.2233720368548E+18)

$million = 1000000;
$large_number = 50000000000000 * $million;
var_dump($large_number);                     // float(5.0E+19)

echo "\n\n\n";

//PHP 中没有整除的运算符
var_dump(25/7);
var_dump((int)(25/7));//强转
var_dump(round(25/7)); //四写五入
var_dump(round(25/7,3));
var_dump(intval(25/7));//将一个值转换成整型的函数


//绝不要将未知的分数强制转换为 integer，这样有时会导致不可预料的结果。 
echo   (int) ( (0.1 + 0.7) * 10 )."\n"; // 显示 7>,因为该结果内部的表示其实是类似 7.9999999999999991118...。涉及到浮点数的精度
echo (0.1+0.7)*10,"\n";