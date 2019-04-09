<?php
namespace Model;

use Core\Entity;

class UserModel extends Entity
{
    private static $relations;

    function __construct()
    {
        $this->bdd = (new \Core\Database())->bdd();
    }

    public function save()
    {
        if(isset($_POST['email']) && isset($_POST['pass']))
        {
            $requet = (new \Core\ORM())->create("users", [$_POST['prenom'], $_POST['nom'], $_POST['email'], $_POST['pass']]);
        }
    }

    public function connexion()
    {
        if(isset($_POST['emailconnex']))
        {
            $data = (new \Core\ORM())->createConnexion($_POST['emailconnex']);
            foreach ($data as $val) {
                    if($val['password'] == $_POST['passconnex'])
                    {
                        header("location: myaccount");
                    }
                    else {
                        echo "C'est pas le bon mot de passe";
                        return;
                    }
                    session_start();
                    $_SESSION['prenom'] = $val['prenom'];
                    $_SESSION['nom'] = $val['nom'];
                    $_SESSION['email'] = $val['email'];
            }
        }
    }

    public function changeMail()
    {
        if(isset($_POST['lastmail']) && isset($_POST['newmail']))
        {
            (new \Core\ORM())->updatemail([$_POST['lastmail'], $_POST['newmail']]);
        }
    }

    public function changePass()
    {
        if(isset($_POST['mail']) && isset($_POST['newpass']))
        {
            (new \Core\ORM())->updatemail([$_POST['lastmail'], $_POST['newmail']]);
        }
    }

    public function desactivate()
    {
        if(isset($_POST['mail']))
        {
            (new \Core\ORM())->desactivateAccount($_POST['mail']);
        }
    }
}
