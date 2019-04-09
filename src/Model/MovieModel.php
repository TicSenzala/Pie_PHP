<?php
namespace Model;

class MovieModel
{
    function __construct()
    {
        $this->bdd = (new \Core\Database())->bdd();
    }

    public function displayAll()
    {
        $data = (new \Core\ORM())->readAll('film');
        return $data;
    }

    public function fiche($id)
    {
        $data = (new \Core\ORM())->readmovie($id);
        if(isset($_POST['addHistorique'])){
            (new \Core\ORM())->addhisto([$data[0]['titre'], $data[0]['resum'], $data[0]['Date_sortie']]);
        }
        if(isset($_POST['minusHistorique']))
        {
            (new \Core\ORM())->deleteHisto($data[0]['titre']);
        }
        return $data;
    }

    public function addMovie()
    {
        if(isset($_POST['title']) && isset($_POST['resum']) && isset($_POST['date']) && isset($_POST['urlimage']) && isset($_POST['urlannonce']))
        {
            (new \Core\ORM())->addMovie([$_POST['title'], $_POST['resum'], $_POST['date'], $_POST['urlimage'], $_POST['urlannonce']]);
        }
    }

    public function deleteMovie()
    {
        if(isset($_POST['movie']))
        {
            (new \Core\ORM())->deleteMovie($_POST['movie']);
        }
    }

    public function modifMovie()
    {
        if(isset($_POST['movie']) && isset($_POST['resum']) && isset($_POST['datemovie']) && isset($_POST['lastmovie']))
        {
            (new \Core\ORM())->modifmovie([$_POST['movie'], $_POST['resum'], $_POST['datemovie'], $_POST['lastmovie']]);
        }
    }
}
