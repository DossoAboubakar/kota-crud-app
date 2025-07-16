<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_equipement';
$table_name ='myclean_equipement';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_equipement',
    'libelle_equipement'
];

$page_title = 'Equipements';
$table_fields = [
    'Id',
    'Libelle',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteEquipement';
$deleteBtn_name = 'Supprimer';
