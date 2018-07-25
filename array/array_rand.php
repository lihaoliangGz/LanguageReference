<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/25/025
 * Desc:
 */

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_key = array_rand($input);
$rand_keys = array_rand($input, 2);
echo $rand_key,"<br/>";
print_r($rand_keys);
echo "<br/>";

echo $input[$rand_keys[0]] . "<br/>";
echo $input[$rand_keys[1]] . "<br/>";