<?php
namespace Core;
class Database
{
    public $bdd;
    public function bdd()
    {
        $this->bdd = new \PDO('mysql:host=localhost;dbname=PiePHP', 'root', '');
        return $this->bdd;
    }
}
