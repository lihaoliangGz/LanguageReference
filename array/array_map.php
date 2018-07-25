<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/24/024
 * Desc:
 */

function cube($n) {
    return $n * $n;
}

$array = array(1,2,3,4,5);
$result = array_map("cube", $array);
print_r($result);