<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");

$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);