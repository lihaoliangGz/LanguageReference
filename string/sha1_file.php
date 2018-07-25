<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/23/023
 * Desc:
 */

$result = sha1_file("test.txt");
echo $result."<br/>",strlen($result);
