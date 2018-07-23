<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/22/022
 * Desc:
 */
$number = 1234.56;
setlocale(LC_MONETARY, 'it_IT');
echo money_format('%.2n', $number) . "\n";