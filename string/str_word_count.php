<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/23/023
 * Desc:
 */

$str = "Hello fri3nd, you're
       looking          good today!";

print_r(str_word_count($str, 1));
print_r(str_word_count($str, 2));
print_r(str_word_count($str, 1, 'àá??3'));

echo str_word_count($str);