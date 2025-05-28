<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_alerte_localite';
$table_name ='laclef_alerte_localite';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_alerte_localite',
    'id_alerte',
    'Ville',
    'Commune',
    'Zone',
    'etat',
    'date_crea_alerte'
];

$page_title = 'Alertes & Localités';
$table_fields = [
    'Id',
    'ID Alertes',
    'Ville',
    'Commune',
    'Zone',
    'État',
    'Créé le'
];$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteAlerteLocalite';
