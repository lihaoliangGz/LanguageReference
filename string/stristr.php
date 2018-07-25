<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/23/023
 * Desc:
 */

$email = 'USER@EXAMPLE.com';
echo stristr($email, 'e'); // 输出 ER@EXAMPLE.com
echo "<br/>";
echo stristr($email, 'e', true); // 自 PHP 5.3.0 起，输出 US