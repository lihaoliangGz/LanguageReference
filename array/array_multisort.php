<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);

$result=array_multisort($ar1, $ar2);
var_dump($result);
echo "<br/>";
print_r($ar1);
echo "<br/>";
print_r($ar2);