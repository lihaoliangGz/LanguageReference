<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */


$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');

function test_print($item, $key) {
    echo "$key holds $item <br/>";
}

array_walk_recursive($sweet, "test_print");