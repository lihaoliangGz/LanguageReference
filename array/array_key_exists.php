<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/24/024
 * Desc:
 */

$search_array=array("first"=>null,"second"=>1);
var_dump(isset($search_array["first"]));
var_dump(array_key_exists("first",$search_array));