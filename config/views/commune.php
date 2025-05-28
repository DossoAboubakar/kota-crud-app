<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_commune';
$table_name ='laclef_commune';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_commune',
    'libelle_commune',
    'lat',
    'long',
    'id_ville'
];
$page_title = 'Communes';
$table_fields = [
    'Id',
    'Libellé',
    'Latitude',
    'Longitude',
    'Ville',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteCommune';
