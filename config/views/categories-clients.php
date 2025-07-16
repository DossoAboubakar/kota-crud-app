<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_categorie_client';
$table_name ='myclean_categorie_client';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_categorie_client',
    'libelle_categorie_client'
];


$page_title = 'Categories & Clients' ;
$table_fields = [
    'Id',
    'Libellé',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteCategorieClient';
$deleteBtn_name = 'deleteCategorieClient';
$editBtn_selector = 'btn-editCategorieClient';
$editBtn_name = 'editCategorieClient';
