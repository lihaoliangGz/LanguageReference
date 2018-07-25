<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/24/024
 * Desc:
 */

function odd($var) {
    if (($var&1)==false) {
        echo "返回false";
    }
    return $var&1;
}

$array = array("a","b","c");
$result = array_filter($array, "odd");
print_r($result);