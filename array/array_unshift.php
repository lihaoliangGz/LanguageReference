<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

$array = array("a", "b", "c");
$number=array_unshift($array, "0");
print_r($number);
echo "<br/>";
print_r($array);