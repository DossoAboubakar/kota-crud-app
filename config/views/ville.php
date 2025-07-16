<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_ville';
$table_name ='myclean_ville';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_ville',
    'libelle_ville',
    'lat',
    'long'
];

$page_title = 'Villes';
$table_fields = [
    'Id Ville',
    'Libelle Ville',
    'Lat',
    'Long'
];

$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteVille';
$editBtn_selector = 'btn-editVille';






