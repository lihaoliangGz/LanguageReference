<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//定义数组
$array=array("foo"=>"first","go"=>"google");
$array2=["foo" => "first", "go" => "google"];

print_r($array);
print_r($array2);

$array = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
);
var_dump($array);

//访问数组单元:
$array=array(
    "foo"=>"bar",
    42=>24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array["multi"]["dimensional"]);
var_dump($array["multi"]["dimensional"]["array"]);

//数组解引用:
function getArray(){
    return array(1,2,3);
}

//php 5.4
$secondElement= getArray()[1];
echo "$secondElement"."\n";

//以前
$tmp= getArray();
$secondElement = $tmp[1];
echo "$secondElement"."\n";

list(, ,$threeElement) = getArray();
echo "$threeElement"."\n";

//用方括号的语法新建／修改
$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;
// at this point of the script

$arr["x"] = 42; // This adds a new element to
                // the array with key "x"

var_dump($arr);

//删除
unset($arr[5]);
var_dump($arr);
unset($arr);
var_dump($arr);


//访问数组2
//error_reporting(E_NOTICE);
$arr = array('fruit' => 'apple', 'veggie' => 'carrot');
// Correct
print $arr['fruit'];  // apple
print $arr['veggie']; // carrot
print $arr[fruit];
echo "\n\n";

//转换为数组
$x=2;
var_dump((array)$x);
var_dump(array($x));

//object类型转换为数组
class A {

    private $A; // This will become '\0A\0A'

}

class B extends A {

    private $A; // This will become '\0B\0A'
    public $AA; // This will become 'AA'

}

var_dump((array) new B());

//将null转换为数组
var_dump(array(NULL));
var_dump((array)NULL);

echo '-----------------------------------------------------------',"\n";

//循环中改变单元
$array=array("foo"=>"bar","color"=>"yellow","anima"=>"cat");
foreach ($array as $value) {
    echo "$value","\n";
}
foreach ($array as $key => $value) {
    echo "$key  $value","\n";
}

//数组的赋值:
$arr1=array(2,3);
$arr2=$arr1;
$arr2[]=4;
var_dump($arr1);
var_dump($arr2);

$arr3=&$arr1;
$arr3[]=4;
var_dump($arr1);
var_dump($arr3);
        