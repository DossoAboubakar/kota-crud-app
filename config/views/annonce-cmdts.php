<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_annonce_commodites';
$table_name ='laclef_annonce_commodites';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_annonce_commodites',
    'uid_annonce',
    'libelle_annonce_commodites',
    'etat_annonce_commodites',
    'date_crea_annonce_commodites'
];

$page_title = 'Annonces & Commodités';
$table_fields = [
    'Id',
    'Uid',
    'Libellé',
    'Etat',
    'Date de Création',
];
$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteAnnonceCmdt';
