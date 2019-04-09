<?php
namespace Core;
class Router
{
    public static function connect()
    {
        $res = explode('/',$_SERVER['REDIRECT_URL']);
        if($res[2] === '')
        {
            var_dump('jo');
            \Controller\AppController::indexAction();
            die();
        }
        elseif(isset($_GET['c']) && isset($_GET['a']))
        {
            $control = 'Controller\\'. $_GET['c'] . 'Controller';
            $action = $_GET['a'] . 'Action';
            $control::$action();
        }
        elseif(!isset($_GET['c']) || isset($_GET['a']))
        {
            \Controller\AppController::indexAction();
        }
        // if(!class_exists($control) || !method_exists($control, $action))
        // {
        //     include './src/View/Error/404.php';
        //     die();
        // }
    }
}
