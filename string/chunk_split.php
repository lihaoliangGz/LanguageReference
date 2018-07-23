<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/22/022
 * Desc:
 */

$data = "abcdefg";
$data2 = "abcdefgdajgajskljfsdakajgljsdklajgklsajdg;lsa";
$bse_result=base64_encode($data2);
echo $bse_result."<br/>";

echo chunk_split($data, 3, "-");
