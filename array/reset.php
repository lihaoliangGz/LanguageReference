<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

$array = array('step one', 'step two', 'step three', 'step four');

$next = next($array);
var_dump($next);

echo "<br/>";

$reset = reset($array);
var_dump($reset);