<?php
namespace Core;

class Core
{
    public function run() {
        \Core\Router::connect();
    }
}
