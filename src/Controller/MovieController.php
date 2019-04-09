<?php
namespace Controller;

use Core\Controller;

class MovieController extends Controller
{
    public function displayMovieAction()
    {
        session_start();
        $display = new \Model\MovieModel();
        $data = $display->displayAll();
        if(isset($_POST['deconnexion']))
        {
            session_destroy();
            header('location: login');
        }
        if(empty($_SESSION))
        {
            header('location: login');
        }
        $regist = new \Core\Controller();
        $regist->render('home', compact('data'));
    }

    public function detailsAction()
    {
        $display = new \Model\MovieModel();
        $data = $display->fiche($_GET['id']);

        $regist = new \Core\Controller();
        $regist->render('DetailFilm', compact('data', 'genre'));
    }

    public function AddMovieAction()
    {
        $display = new \Model\MovieModel();
        $display->addMovie();

        $regist = new \Core\Controller();
        $regist->render('AddMovie');
    }

    public function DeleteMovieAction()
    {
        $display = new \Model\MovieModel();
        $display->deleteMovie();

        $regist = new \Core\Controller();
        $regist->render('DeleteMovie');
    }

    public function ModifMovieAction()
    {
        $display = new \Model\MovieModel();
        $display->modifMovie();

        $regist = new \Core\Controller();
        $regist->render('modifMovie');
    }
}