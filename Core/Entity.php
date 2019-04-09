<?php
namespace Core;
class Entity
{
    private $array;
    private $bdd;
    public function __construct($array)
    {
        $this->bdd = (new \Core\Database())->bdd();
        $this->array = $array;
    }

    public function getQueryParams()
    {
        if(isset($this->array['email']))
        {
            $selectId = $this->bdd->prepare("SELECT email FROM users WHERE email = :email");
            $selectId->bindValue(':email', $this->array['email']);
            $selectId->execute();
            $data = $selectId->fetchAll();
            foreach ($data as $value) {
                return $value;
            }
        }
    }
}
