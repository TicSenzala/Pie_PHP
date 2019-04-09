<?php
spl_autoload_register(function($class)
{
    if(is_dir('Core') && file_exists(str_replace('\\', '/', $class) . '.php'))
    {
        require_once str_replace('\\', '/', $class) . '.php';
    }
    else{
        $dir = $_SERVER['DOCUMENT_ROOT'] .'/PiePHP/src/';
        $path = $dir . str_replace('\\', DIRECTORY_SEPARATOR, $class). '.php';
        $modifPath = str_replace('Core', '', $path);
        if(file_exists($modifPath))
        {
            require_once $modifPath;
        }
    }

});
