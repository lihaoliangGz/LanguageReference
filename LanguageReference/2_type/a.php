<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/15/015
 * Desc:
 */


//简介
$a_bool = true;
$a_str = "foo";
$a_str2 = 'foo';
$a_int = 13;

echo gettype($a_bool)."<br/>";
echo gettype($a_str)."<br/>";
if (is_string($a_str)) {
    echo "字符串"."<br/>";
}
if (is_string($a_int)) {
    echo "是字符串"."<br/>";
}else{
    echo "不是字符串"."<br/>";
}
echo is_int($a_int)."<br/><br/><br/>";


//布尔型

//整型
echo PHP_INT_SIZE."<br/>";
echo PHP_INT_MAX."<br/>";
//echo PHP_INT_MIN."<br/>"; //php7后生效
$large_number = 2147483647;
var_dump($large_number);                     // int(2147483647)

$large_number = 2147483648;
var_dump($large_number);                     // float(2147483648)
var_dump(1 / 2);
var_dump(23 / 7);
var_dump((int)(23 / 7));
var_dump(round(23 / 7,6));
var_dump(intval(0.5));
var_dump(is_nan(12));
echo "<br/><br/><br/>";

//字符串
echo '\\sdg;jgk\$sajk\n\t\''.'<br/><br/>';

echo "$a_str sdgsgbsang".'<br/>';

$juices = array("apple", "orange", "koolaid1" => "purple");
echo "$juices[0]  ";
echo "$juices[koolaid1]"."<br/>";

class people{
    public $join = "Join Str";
    public $mary = "Mary sis";
    private $name = "nane";
}

$people = new people();

echo "$people->join\n";

$str = "abcdefghij";
echo "$str[2]"." {$str{2}}\n";
$bool = false;
$bool2 = true;
echo "布尔=".$bool;
echo "布尔=".$bool2."<br/>";
echo get_class($people)."<br/>";
print_r($people);
















