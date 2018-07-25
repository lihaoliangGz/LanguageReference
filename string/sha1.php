<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/23/023
 * Desc:
 */

$result=sha1("abc");
//$result=sha1("abc",true);
echo $result, "<br/>", strlen($result);