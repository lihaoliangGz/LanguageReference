<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/24/024
 * Desc:
 */

$input_array = array("a", "b", "c", "d", "e");
print_r(array_chunk($input_array, 3));
echo "<hr/>";
print_r(array_chunk($input_array, 3, true));