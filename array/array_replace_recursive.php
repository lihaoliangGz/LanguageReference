<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

$basket = array_replace_recursive($base, $replacements);
print_r($basket);

$basket = array_replace($base, $replacements);
print_r($basket);