<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/24/024
 * Desc:
 */

$input_array = array("FirSt" => 1, "SecOnd" => 4);

$result = array_change_key_case($input_array, CASE_UPPER);
print_r($result);