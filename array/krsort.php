<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
$result=krsort($fruits);
var_dump($result);
echo "<br/>";
print_r($fruits);