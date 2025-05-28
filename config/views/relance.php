<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_relance';
$table_name ='laclef_relance';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_relance',
    'id_annonce',
    'id_vendeur',
    'debut_relance',
    'fin_relance',
    'nbcredit_relance',
    'date_relance',
    'etat_relance',
    'debut_affiche',
    'fin_affiche'
];

$page_title = 'Relances';
$table_fields = [
    'Id Relance',
    'Id Annonce',
    'Id Vendeur',
    'Debut Relance',
    'Fin Relance',
    'Nbcredit Relance',
    'Date Relance',
    'Etat Relance',
    'Debut Affiche',
    'Fin Affiche',
];
$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteRelance';
