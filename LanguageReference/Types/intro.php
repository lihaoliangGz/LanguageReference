<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * PHP 支持 9 种原始数据类型。 

四种标量类型： 
• boolean（布尔型）  
• integer（整型）  
• float（浮点型，也称作 double)  
• string（字符串）  

三种复合类型： 
• array（数组）  
• object（对象）  
• callable（可调用）  

最后是两种特殊类型： 
• resource（资源）  
• NULL（无类型）  

为了确保代码的易读性，本手册还介绍了一些伪类型： 
• mixed（混合类型）  
• number（数字类型）  
• callback（回调类型，又称为 callable）  
• array|object（数组 | 对象类型）  
• void （无类型）  

以及伪变量 $...。 

 */

//用 var_dump() 函数,查看某个表达式的值和类型
$x=1;
$y="1";
var_dump($x);
var_dump($y);


//获取类型
$a_bool = TRUE;   // 布尔值 boolean
$a_str = "foo";  // 字符串 string
$a_str2 = 'foo';  // 字符串 string
$an_int = 12;     // 整型 integer
$a_double=1.2;   // 浮点型 

echo gettype($a_bool),"<br/>"; // 输出:  boolean
echo gettype($a_str), "<br/>";  // 输出:  string
echo gettype($a_double), "<br/>";  // 输出: double


//判断类型
if(is_string($a_double)){
      echo "String: $a_bool";
}

// settype() 函数强制转换类型
echo gettype($a_double),"<br/>";
settype($a_double, "int");
echo gettype($a_double), "<br/>";
settype($a_double, "boolean");
echo gettype($a_double), "<br/>";