<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/24/024
 * Desc:
 */

$array1 = array(0, 1, 2);
$array2 = array("00", "01", "2");
$result1 = array_diff_assoc($array1, $array2);
print_r($result1);

$array11 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array22 = array("a" => "green", "yellow", "red");
$result2 = array_diff_assoc($array11, $array22);
print_r($result2);