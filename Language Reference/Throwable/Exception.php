<?php

/* * Throwable 
  ◦ Error
  ◾ ArithmeticError
  ◾ DivisionByZeroError
  ◾ AssertionError
  ◾ ParseError
  ◾ TypeError
  ◦ Exception ◾ ...
 * 
 */

/**
 * 自定义一个异常处理类
 */
class MyException extends Exception {

    //重定义构造器,使message变为必须被指定的属性:
    public function __construct($message, $code = 0, Exception $previous = null) {

        //调用父类的构造器，确保所有变量都被正确赋值
        parent::__construct($message, $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ":[{$this->code}]:{$this->message}\n";
    }

    public function customFunction() {
        echo "A custom function for this type of exception\n";
    }

}

try {
    throw new MyException("自定义异常_1", 2);
    echo "try中,抛出异常后面的代码\n";
} catch (MyException $exc) {
    echo "catch MyException:\n";
    echo $exc->customFunction();
    echo $exc->__toString();
} catch (Exception $exc){
    echo "catch Exception:\n",$exc;
}finally {
    echo "finally中的代码(例子1)\n\n";
}

echo "---------------------------\n\n";

try {
    throw new Exception("Exception异常",16);
} catch (MyException $e){
    echo "catch MyException:\n",$e,"\n\n";
} catch (Exception $exc) {
    echo "catch Execption:\n",$exc,"\n\n";
} finally {
      echo "finally中的代码(例子2)\n";
}






