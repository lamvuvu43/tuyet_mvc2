<?php
include './config.php';
//$c: className
function loadClass($c)
{
    if (is_file("controller/$c.php")) //controller/ABC.php
        include "controller/$c.php";
    else if (is_file("model/$c.php"))

        include "model/$c.php";
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

spl_autoload_register('loadClass');
spl_autoload_register('url');

$controller = isset($_GET['controller'])?$_GET['controller']: 'ProductController';

// $pw ='123456';
// $s1='!2)&';
// $s2 = '#&@*';
// $pw2 = md5($s1 . $pw . $s2);

// echo $pw2;exit;
//echo $controller; ProductController, $x = new ProductController()
$x = new $controller();//

