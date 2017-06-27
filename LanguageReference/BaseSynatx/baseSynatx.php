<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 一：<?php 和 ?>
 * 二：<? 和 ?>短标记，不鼓励使用。只有通过激活 php.ini 中的 short_open_tag 配置指令或者在编译 PHP 时使用了配置选项 --enable-short-tags 时才能使用短标记。 
 * 三：<script language="php"> </script>
 * 四: ASP 风格标记:<% echo 'You may optionally use ASP-style tags'; %>,仅在通过 php.ini 配置文件中的指令 asp_tags 打开后才可用。 
 */

echo "PHP推荐标记";
?>


<!--从 HTML 中分离，因为当 PHP 解释器碰到 ?> 结束标记时就简单地将其后内容原样输出-->
<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p> 


<!--Example #1 使用条件的高级分离术-->
<!--PHP 将跳过条件语句未达成的段落，即使该段落位于 PHP 开始和结束标记之外。
由于 PHP 解释器会在条件未达成时直接跳过该段条件语句块，因此 PHP 会根据条件来忽略之。--> 
<!--要输出大段文本时，跳出 PHP 解析模式通常比将文本通过 echo 或 print 输出更有效率。--> 

<?php if(TRUE):?>
    This will show if the expression is true.
<?php else:?>
    Otherwise this will show.
<?php endif; ?>

    <script language="php">
         echo "\n\n<br/>","使用script标签", "\n\n<br/>";
    </script>

    
    
    <!--指令分隔符-->
    <!--同 C 或 Perl 一样，PHP 需要在每个语句后用;结束指令。-->

    
    <!--注释-->
    <!--PHP 支持 C，C++ 和 Unix Shell 风格（Perl 风格）的注释。例如:--> 
    <?php
    echo "This is a test","\n\n</br>"; // This is a one-line c++ style comment
    /* This is a multi line comment
      yet another line of comment */
    echo "This is yet another test", "\n\n</br>";
    echo 'One Final Test', "\n\n</br>"; # This is a one-line shell-style comment
    
    ?> 

