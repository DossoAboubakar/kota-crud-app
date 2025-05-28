<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_alerte_commodites';
$table_name ='laclef_alerte_commodites';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_alerte_commodites',
    'id_alerte',
    'libelle_alerte',
    'etat_alerte_commodites',
    'date_crea_alerte_commodites'
];

$page_title = 'Alertes & Commandités';
$table_fields = [
    'Id',
    'ID alerte',
    'Libellé',
    'État',
    'Créé le'
];$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteAlerteCmdt';
