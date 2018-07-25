<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

$numbers = range(1, 20);
$result = shuffle($numbers);
var_dump($result);
echo "<br/>";
var_dump($numbers);