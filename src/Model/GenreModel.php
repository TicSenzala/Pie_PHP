<?php
namespace Model;

class GenreModel
{
    public function modifGenre()
    {
        if(isset($_POST['genre']) && isset($_POST['movie']))
        {
            (new \Core\ORM())->Genremodif([$_POST['genre'], $_POST['movie']]);
        }
    }

    public function selectGenre()
    {
        $data = (new \Core\ORM())->readAll('genre');
        return $data;
    }

    public function addgenre()
    {
        if(isset($_POST['nom']))
        {
            (new \Core\ORM())->AddGenre($_POST['nom']);
        }
    }

    public function deleteGenre()
    {
        if(isset($_POST['nom']))
        {
            (new \Core\ORM())->deleteGenre($_POST['nom']);
        }
    }
}