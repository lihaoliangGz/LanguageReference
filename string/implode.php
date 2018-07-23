<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/22/022
 * Desc:
 */

$array = [1,2,23];
//$result=implode($array);
$result=implode(",",$array);
echo $result;

$array2 = array('a',"b","c");

echo implode("。", $array2);