<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/15/015
 * Desc:
 */

namespace NS{
    class SimpleClass
    {
        public $var = "default value";

       function __construct() {
           echo '构造函数执行'.'<br/>';
       }

       function __destruct() {
           // TODO: Implement __destruct() method.
           echo "<br/>"."析构函数执行";
       }

        public function displayVar(){
            echo $this->var;
            echo SimpleClass::class;
        }
    }

    $simpleClass = new SimpleClass();
    $simpleClass->displayVar();

    $copy = clone $simpleClass;

    echo "<br/><br/><br/>".$copy->var;
}
