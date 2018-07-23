<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/22/022
 * Desc:
 */

$fp=fopen("test.txt", "w");
var_dump($fp);
fprintf($fp, "%04d-%02d-%02d");