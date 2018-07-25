<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/24/024
 * Desc:
 */

$var = 'ABCDEFGH:/MNRPQR/';
echo "Original: $var<hr />\n";

/* 这两个例子使用 "bob" 替换整个 $var。*/
echo substr_replace($var, 'bob', 0) . "<br />\n";