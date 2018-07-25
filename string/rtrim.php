<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/23/023
 * Desc:
 */
$data = "Hello World\n";
echo $data."<br/>";
$result = rtrim($data);
echo $result;

echo "<br/><br/><br/>";

$data2 = "Hello World";
$result2 = rtrim($data2, "d");
echo $result2;