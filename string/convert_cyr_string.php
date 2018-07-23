<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/22/022
 * Desc:
 */

$data = "abc";
$data2 = "сВМПЛП";
$result=convert_cyr_string($data2, 'k', 'w');
echo $result;