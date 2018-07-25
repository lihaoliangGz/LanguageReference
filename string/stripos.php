<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/23/023
 * Desc:
 */

echo stripos("abcdef", "b");
//echo stripos("abcdef", "bb");
echo stripos("abcdef", "g");
if (stripos("abcdef","g")) {
    echo "存在";
} else {
    echo "不存在";
}