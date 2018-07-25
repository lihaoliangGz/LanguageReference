<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

$array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");

asort($array1);
echo "Standard sorting\n","<br/>";
print_r($array1);

natsort($array2);
echo "<br/>","\nNatural order sorting\n","<br/>";
print_r($array2);