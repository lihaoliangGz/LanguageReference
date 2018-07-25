<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

function cmp($var1, $var2) {
    if ($var1>$var2) {
        return 1;
    } elseif ($var1===$var2) {
        return 0;
    } else {
        return -1;
    }
}

$array=array(2,3,4,5,1, 8,);
usort($array, "cmp");
var_dump($array);