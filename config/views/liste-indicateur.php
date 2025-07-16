<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_indic';
$table_name ='myclean_liste_indicateur';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_indic',
    'pays',
    'drapeau',
    'libelle'
];

$page_title = 'Liste des indicateurs';
$table_fields = [
    'Id',
    'Pays',
    'Drapeau',
    'Libelle',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteIndicateur';
$editBtn_selector = 'btn-editIndicateur';
