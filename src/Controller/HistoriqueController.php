<?php
namespace Controller;

use Core\Controller;

class HistoriqueController extends Controller
{
    public function displayFuncHistoAction()
    {
        $display = new \Model\HistoriqueModel();
        $data = $display->selecthisto();
        $regist = new \Core\Controller();
        $regist->render('Historique', compact('data'));
    }
}