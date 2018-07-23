<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/22/022
 * Desc:
 */

$test=addcslashes("abcACB", "A..z");
var_dump($test);
$test2=addcslashes("58", "\0..\58!@\177..\377");
var_dump($test2);