<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/23/023
 * Desc:
 */


$text = 'This is a Simple text.';

// 输出 "is is a Simple text."，因为 'i' 先被匹配
echo strpbrk($text, 'mi');

echo "<br/>";
// 输出 "Simple text."，因为字符区分大小写
echo strpbrk($text, 'S');