<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/23/023
 * Desc:
 */

$num = 5;
$location = 'tree';

$format = 'There are %d monkeys in the %s';
echo sprintf($format, $num, $location);