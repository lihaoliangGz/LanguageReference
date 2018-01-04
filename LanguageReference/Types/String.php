<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//一个字符串 string 就是由一系列的字符组成，其中每个字符等同于一个字节。这意味着 PHP 只能支持 256 的字符集，因此不支持 Unicode 。详见字符串类型详解。 
//Note: string 最大可以达到 2GB。 

//单引号
//不像双引号和 heredoc 语法结构，在单引号字符串中的变量和特殊字符的转义序列将不会被替换。 
echo 'this is a simple string',"\n";

// 可以录入多行
echo 'You can also have embedded newlines in 
strings this way as it is
okay to do',"\n";

// 输出： Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"',"\n";

// 输出： You deleted C:\*.*?
echo 'You deleted C:\\*.*?',"\n";
echo 'You deleted C:\\', "\n";
echo 'You deleted C:\5', "\n";

// 输出： You deleted C:\*.*?
echo 'You deleted C:\*.*?',"\n";

// 输出： This will not expand: \n a newline
echo 'This will not expand: \n a newline',"\n";

// 输出： Variables do not $expand $either
echo 'Variables do not $expand $either',"\n";

echo 'this is 
a
   smiple
    app;e
    ';

$a="1";
echo "$a";
echo "\a";

echo <<<EOD
agadghl
adgjdg
asdgasg
EOD;
?>

