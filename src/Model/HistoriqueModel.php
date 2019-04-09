<?php
namespace Model;

class HistoriqueModel
{
    public function selectHisto()
    {
        $data = (new \Core\ORM())->readAll('historique');
        return $data;
    }
}