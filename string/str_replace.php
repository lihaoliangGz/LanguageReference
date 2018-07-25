<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/23/023
 * Desc:
 */

// 赋值: <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
echo $bodytag;