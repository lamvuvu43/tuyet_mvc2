<?php 
include '../config.php';
//$c: className
function loadClass($c)
{
    if (is_file("controller/$c.php")) //controller/ABC.php 
        include "controller/$c.php";
    else if (is_file("../model/$c.php"))   
        include "../model/$c.php";
    else {
        echo "Err!";
        exit;
    }
}
spl_autoload_register('loadClass');

$controller = isset($_GET['controller'])?$_GET['controller']:'ProductController';

$x = new $controller();//

