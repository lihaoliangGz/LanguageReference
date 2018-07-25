<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/24/024
 * Desc:
 */

$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$result = array_merge_recursive($ar1, $ar2);
print_r($result);