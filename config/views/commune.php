<?php 

use Application\CrudRepository\CrudCommune;
$primary_key='id_commune';
$table_name ='myclean_commune';
$operations = new CrudCommune();
$records = $operations->getCommunes();
$data_keys = [
    'id_commune',
    'libelle_commune',
    'longitude',
    'latitude',
    'ville'
];
$page_title = 'Communes';
$table_fields = [
    'Id',
    'Commune',
    'Longitude',
    'Latitude',
    'Ville',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteCommune';
$deleteBtn_name = 'btn-deleteCommune';
$editBtn_selector = 'btn-editCommune';
