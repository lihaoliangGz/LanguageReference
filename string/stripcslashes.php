<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/23/023
 * Desc:
 */

stripcslashes('\n') == "\n"; //true;

$str = "we are escaping \r\n"; //we are escaping

echo stripcslashes($str);