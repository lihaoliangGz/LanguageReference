<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/24/024
 * Desc:
 */

function key_compare_func($key1,$key2) {
    if ($key1===$key2) {
        return 0;
    } elseif ($key1>$key2) {
        return 1;
    } else {
        return -1;
    }
}


$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

$result = array_intersect_ukey($array1, $array2,"key_compare_func");
print_r($result);