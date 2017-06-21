<?php
namespace MyProject {

    const CONNECT_OK = 1;

    class Connection { /* ... */
    }

    function connect() { /* ... */
    }
    
    echo '"', __NAMESPACE__, '"';
}

namespace { // 全局代码
    session_start();
    $a = MyProject\connect();
    //echo MyProject\Connection::start();
    echo "abc";
    
}


//echo "aaaaa";