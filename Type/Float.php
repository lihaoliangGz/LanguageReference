<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//永远不要相信浮点数结果精确到了最后一位，也永远不要比较两个浮点数是否相等。如果确实需要更高的精度，应该使用任意精度数学函数或者 gmp 函数。 

//比较浮点数
$a=1.23456;
$b=1.23456;
var_dump($a==$b);

$c = 1.23456789;
$d = 1.23455780;
var_dump($c > $d);
echo "\n";

$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

if (abs($a - $b) < $epsilon) {
    echo "true"."\n\n";
}

$f=NAN;
var_dump(is_nan($f));//true
var_dump($f);//float(NAN)
