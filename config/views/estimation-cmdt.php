<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_estimation_commodites';
$table_name ='laclef_estimation_commodites';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_estimation_commodites',
    'id_estimation',
    'libelle_estimation',
    'etat_estimation_commodites',
    'date_crea_estimation_commodites'
];


$page_title = 'Estimations & Commodités';
$table_fields = [
    'Id',
    'Libelle',
    'Estimation',
    'Etat',
    'Date creation',
];
$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteEstimationCmdt';
