<?php
namespace Core;
class Controller
{
    private static $_render;
    private $req;
    public function __construct(){
        $this->req = new \Core\Request();
        $this->req->request();
    }

    protected function render($view, $scope = []) {
        extract($scope);
        $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
        str_replace('Core\Controller', 'User', basename(get_class($this))),
        $view]) . '.php';
        if (file_exists($f)) {
            include($f);
            $view = ob_get_clean();
            ob_start();
            $src = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src',
            'View','index']);
            self::$_render = ob_get_clean();
            $tmp = file_get_contents($src.'.php');
            $tmp = \Core\TemplateEngine::templateEngine($tmp);
            eval(" ?>$tmp ");
        }
    }
}
