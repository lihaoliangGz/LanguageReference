<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/22/022
 * Desc:
 */

$str = "first=value&arr[]=foo+bar&arr[]=baz";

// 推荐用法
parse_str($str, $output);
echo $output['first'];  // value
echo "<br/>";
echo $output['arr'][0]; // foo bar
echo "<br/>";
echo $output['arr'][1]; // baz
echo "<br/>";
