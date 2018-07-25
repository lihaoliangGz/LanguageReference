<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($fruit);
echo "<br/>";
print_r($stack);