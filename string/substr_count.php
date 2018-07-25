<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/24/024
 * Desc:
 */

$text = 'This is a test';

echo substr_count($text, 'is'); // 2
echo "<br/>";
echo substr_count("abcdefgb", "b");