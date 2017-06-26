<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace my\name;

class MyClass{}
function myFunction(){}
const MYCONST=1;


$a = new MyClass;
$c = new \my\name\MyClass; // 参考 "全局空间" 小节

$a = strlen('hi'); // 参考 "使用命名空间：后备全局函数/常量" 小节

$d = namespace\MYCONST; // 参考 "namespace操作符和__NAMESPACE__常量" 小节

$d = __NAMESPACE__ . '\MYCONST';
echo constant($d); // 参考 "命名空间和动态语言特征" 小节