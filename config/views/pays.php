<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id';
$table_name ='myclean_pays';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id',
    'code',
    'alpha2',
    'alpha3',
    'nom_en_gb',
    'nom_fr_fr'
];
$page_title = 'Liste des pays';
$table_fields = [
    'Id',
    'Code',
    'Alpha2',
    'Alpha3',
    'Nom en GB',
    'Nom en FR',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deletePays';
$editBtn_selector = 'btn-editPays';
