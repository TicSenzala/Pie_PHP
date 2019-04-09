<?php
namespace Controller;

use Core\Controller;

class GenreController extends Controller
{
    public function modifGenreAction()
    {
        $display = new \Model\GenreModel();
        $display->modifGenre();
        $genre = $display->selectGenre();

        $regist = new \Core\Controller();
        $regist->render('modifGenre', compact('genre'));
    }

    public function addGenreAction()
    {
        $display = new \Model\GenreModel();
        $display->AddGenre();

        $regist = new \Core\Controller();
        $regist->render('AddGenre');
    }

    public function DeleteGenreAction()
    {
        $display = new \Model\GenreModel();
        $display->deleteGenre();

        $regist = new \Core\Controller();
        $regist->render('DeleteGenre');
    }
}

