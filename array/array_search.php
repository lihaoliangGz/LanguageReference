<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

$key = array_search(2, array(1, 2, 3, 4, 5));
$key2 = array_search("a", array(1, 2, 3, 4, 5));

echo $key;
var_dump($key2) ;