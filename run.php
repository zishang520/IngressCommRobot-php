<?php
if (substr(php_sapi_name(), 0, 3) !== 'cli') {
    die("This Programe can only be run in CLI mode.\n");
}
ini_set('date.timezone', 'Asia/Shanghai');

define('ROOT', __DIR__);
require ROOT . '/lib/function.base.php';

$h = intval(date('H'));
if (7 <= $h && $h <= 23) {
    $a = new Ingress(16);
    echo $a->auto_send_msg_new_agent();
    echo "\n";
} else {
    echo "time 00-06 not run\n";
}
