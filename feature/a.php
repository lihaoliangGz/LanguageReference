<?php
/**
 * Created by PhpStorm.
 * Author: lhl
 * Date: 2018/7/17/017
 * Desc:
 */

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/2.3 401 Unauthorized');
    echo "嗨喽，用户还没验证";
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}