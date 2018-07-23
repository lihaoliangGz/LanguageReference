<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/22/022
 * Desc:
 */
$data = "123456";
$result=crypt($data,"13");
echo $result."<br/>";

//推荐使用:
$result2=password_hash($data,PASSWORD_DEFAULT);
echo $result2."<br/>".strlen($result2);