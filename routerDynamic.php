<?php
$res = explode('/',$_SERVER['REDIRECT_URL']);
if($res[2] === '')
{
    \Controller\UserController::indexAction();
    die();
}
if(isset($_GET['c']) && isset($_GET['a']))
{
    $control = 'Controller\\'. $_GET['c'] . 'Controller';
    $action = $_GET['a'] . 'Action';
    $control::$action();
}
elseif(isset($_GET['c']) || isset($_GET['a']))
{
    \Controller\AppController::indexAction();
}
elseif(!class_exists($control) || !method_exists($control, $action))
{
    header("location: 404.html");
}
