<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/22/022
 * Desc:
 */

$checksum = crc32("The quick brown fox jumped over the lazy dog.");

echo $checksum;
printf("%u\n", $checksum);