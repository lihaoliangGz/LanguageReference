<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);

echo"<hr/>";

$array = array(1,2,3,4,5);
$reversed = array_reverse($array);
$reversed2 = array_reverse($array,true);
print_r($reversed);
echo "<br/>";
print_r($reversed2);