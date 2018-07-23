<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/22/022
 * Desc:
 */

//二进制转16进制
$str = "01101001";
$result=bin2hex($str);
var_dump($result);

$str2 = "Hello";
$result2=bin2hex($str2);
var_dump($result2);

$hex_str = "48656c6c6f";
$bin_str = pack("H*" , $hex_str);
var_dump($bin_str);

//16进制字符串转二进制字符串
$hex="48656c6c6f";
$bin = hex2bin($hex);
var_dump($bin);