<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/22/022
 * Desc:
 */

$data = "abd";
$data2 = "abd";
$result=md5($data);
$result2 = md5($data2,true);
echo $result."<br/>";
echo $result2;