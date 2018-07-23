<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/22/022
 * Desc:
 */

$str = "Is your name O'reilly?";

$test=addslashes($str);
var_dump($test);

$test2=get_magic_quotes_gpc();
var_dump($test2);
