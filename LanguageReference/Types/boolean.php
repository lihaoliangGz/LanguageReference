<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$test="a";
if($test) {
    echo "真";
}
?>

<?php
$action="show_version";
$show_separators="xyx";

// == 是一个操作符，它检测两个变量是否相等，并返回一个布尔值
if ($action == "show_version") {
    echo "The version is 1.23";
}

// 这样做是不必要的...
if ($show_separators == TRUE) {
    echo "<hr/>\n";
}

// ...因为可以使用下面这种简单的方式：
if ($show_separators) {
    echo "<hr/>\n";
}
?> 

<?php
/**
 * 转换为布尔值
 * 要明确地将一个值转换成 boolean，用 (bool) 或者 (boolean) 来强制转换。
 * 但是很多情况下不需要用强制转换，因为当运算符，函数或者流程控制结构需要一个 boolean 参数时，该值会被自动转换。 
 */

/**
 * 当转换为 boolean 时，以下值被认为是 FALSE： 
• 布尔值 FALSE 本身  
• 整型值 0（零）  
• 浮点型值 0.0（零）  
•  空字符串，以及字符串 "0"  
• 不包括任何元素的数组  
•  特殊类型 NULL（包括尚未赋值的变量）  
•  从空标记生成的 SimpleXML 对象  

所有其它值都被认为是 TRUE（包括任何资源 和 NAN）。 
-1 和其它非零值（不论正负）一样，被认为是 TRUE！
 */