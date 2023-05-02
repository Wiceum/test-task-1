<?php

include_once('Core/utils.php');

$cname = $_GET['c'] ?? 'index';
$path = 'Controllers/'.$cname.'.php';


if(checkControllerName($cname) && file_exists($path)) {
    include_once($path);
} else {
    header('HTTP/1.1 404 Not Found');
    include('Views/errors/v_404.php');
}
