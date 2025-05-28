<?php

namespace Application\Controllers;

use Application\CrudRepository\CrudAbonnement;

class AbonnementController
{
    private CrudAbonnement $operations ;

    public function __construct()
    {
        $this->operations = new CrudAbonnement();
    }

    public function redirectToAbonnementListView()
    {
        $listAbonnements = $this->operations->getAbonnements();
        require(dirname(__DIR__) . '/views/abonnements.php');
    }

    public function perfomDeleteAction(int $id)
    {
        $this->operations->deleteAbonnement($id);
        header('Location: /index.php?action=fecthListAbonnements');
    }



}