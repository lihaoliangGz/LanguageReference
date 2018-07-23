<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/15/015
 * Desc: object 对象
 */

class foo{
    function do_foo(){
        echo "this is foo";
    }
}

$foo = new foo();
$foo->do_foo();
echo (unset)$foo;