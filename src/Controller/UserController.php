<?php
namespace Controller;

use Core\Controller;

class UserController extends Controller
{
    private $secure;
    private $email;
    private $password;
    public function registerAction()
    {
        $bddConnect = new \Model\UserModel();
        $mail = (new \Core\Entity($_POST))->getQueryParams();
        if(isset($_POST['email']) && $mail == null)
        {
            // echo "Votre compte a été créé.";
            $bddConnect->save();
            header("location: login");
        }
        $bddConnect->connexion();
        $regist = new \Core\Controller();
        $regist->render('register');
    }

    public function loginAction()
    {
        $bddConnect = new \Model\UserModel();
        $bddConnect->connexion();
        $regist = new \Core\Controller();
        $regist->render('login');
    }

    public function accountAction()
    {
        $regist = new \Core\Controller();
        session_start();
        $display = new \Model\MovieModel();
        if(isset($_POST[0]))
        {
            session_destroy();
            header('location: login');
        }
        if(empty($_SESSION))
        {
            header('location: login');
        }

        $regist->render('myaccount');
    }

    public function modifAccountAction()
    {
        $regist = new \Core\Controller();
        session_start();
        if(isset($_POST[0]))
        {
            session_destroy();
            header('location: login');
        }
        $regist->render('modifAccount');
    }

    public function modifPassAction()
    {
        $bddConnect = new \Model\UserModel();
        $bddConnect->changePass();
        session_start();
        if(isset($_POST[0]))
        {
            session_destroy();
            header('location: login');
        }
        $regist = new \Core\Controller();
        $regist->render('modifPass');
    }

    public function modifMailAction()
    {
        $bddConnect = new \Model\UserModel();
        $bddConnect->changeMail();
        session_start();
        if(isset($_POST[0]))
        {
            session_destroy();
            header('location: login');
        }

        $regist = new \Core\Controller();
        $regist->render('modifMail');
    }

    public function deleteAction()
    {
        $bddConnect = new \Model\UserModel();
        if(isset($_POST['validDelete']) && !empty($_POST['mail']))
        {
            $bddConnect->desactivate();
            header('location: moncompte');
        }

        $regist = new \Core\Controller();
        $regist->render('delete');
    }
}
