<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/23/023
 * Desc:
 */

$input = "Alien";
echo str_pad($input, 10),"<br/>";                      // 输出 "Alien     "
echo str_pad($input, 10, "-=", STR_PAD_LEFT),"<br/>";  // 输出 "-=-=-Alien"
echo str_pad($input, 10, "_", STR_PAD_BOTH),"<br/>";   // 输出 "__Alien___"
echo str_pad($input,  6, "___"),"<br/>";               // 输出 "Alien_"
echo str_pad($input,  3, "*"),"<br/>";                 // 输出 "Alien"