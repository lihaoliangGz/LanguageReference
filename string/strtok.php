<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/24/024
 * Desc:
 */

$string = "This is tan example string";
$tok = strtok($string," ");
var_dump($tok) ;
var_dump(strtok(" "));
var_dump(strtok(" "));
var_dump(strtok(" "));
var_dump(strtok(" "));
var_dump(strtok(" "));