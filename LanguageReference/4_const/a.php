<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/15/015
 * Desc: 常量
 */

define("FOO", 'foo');
const CONSTANT = "constant";
echo FOO."<br/>";
echo CONSTANT."<br/>";
//var_dump(get_defined_constants()) ;
var_dump(defined(FOO));
//constant(FOO);
echo "<br/>";

echo __LINE__."<br/>";
echo __FILE__."<br/>";
echo __DIR__."<br/>";
echo __FUNCTION__."<br/>";
echo __CLASS__."<br/>";
echo __METHOD__."<br/>";
echo __NAMESPACE__."<br/>";