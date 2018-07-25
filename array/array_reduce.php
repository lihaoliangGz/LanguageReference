<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

function sum($carry, $item) {
    $carry += $item;
    return $carry;
}

function product($carry, $item) {
    $carry *= $item;
    return $carry;
}

$array = array(1,2,3,4,5);
$result=array_reduce($array, "sum");
$result2 = array_reduce($array, "product",2);
echo $result."<br/>";
echo $result2."<br/>";
echo array_reduce(array(), "sum","no data to reduce");