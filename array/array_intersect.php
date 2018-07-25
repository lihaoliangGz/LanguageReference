<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/24/024
 * Desc:
 */

$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);