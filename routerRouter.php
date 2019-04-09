<?php
private static $routes;
public static function connect ($url, $route) {
    self::$routes[$url] = $route;
    $route = self::get($url);
    $control = ucfirst('\Controller\\'.$route[0]['controller']);
    $action = $route[0]['action'];
    if(!class_exists($control) && !method_exists($action))
    {
        header("Location: /404.html");
        die();
    }
    else {
        $control::$action();
    }
}

public static function get ($url) {
    $control = self::$routes[$url]['controller'] . 'Controller';
    $action = self::$routes[$url]['action']. 'Action';
    $route = array(
        array(
            'controller' => ucfirst($control),
            'action' => $action
        )
    );
    return $route;
