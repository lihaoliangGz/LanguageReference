<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/22/022
 * Desc:
 */

$pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
$result=explode(" b", $pizza,-4);
var_dump($result);
echo "<br/><br/><br/>";
print_r($result);
