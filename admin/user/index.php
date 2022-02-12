<?php
include '../../config.php';
//$c: className
function loadClass($c)
{
    if (is_file("../../admin/user/controller/$c.php")) //controller/ABC.php
        include "../../admin/user/controller/$c.php";
    else if (is_file("../../model/$c.php"))
        include "../../model/$c.php";
    else {
        echo "Err!";
        exit;
    }
}

function url(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'];
}
;
spl_autoload_register('loadClass');
spl_autoload_register('url');

$controller = isset($_GET['controller'])?$_GET['controller']:'UserController';

$x = new $controller();//
