<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

sort($array1);
echo "Standard sorting\n","<br/>";
print_r($array1);

natcasesort($array2);
echo "<br/>","\nNatural order sorting (case-insensitive)\n","<br/>";
print_r($array2);