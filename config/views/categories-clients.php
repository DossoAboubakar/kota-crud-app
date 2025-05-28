<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_categorie_client';
$table_name ='laclef_categorie_client';
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
$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteCategorieClient';
