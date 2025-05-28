<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_categorie_actualites';
$table_name ='laclef_categorie_actualites';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_categorie_actualites',
    'libelle_categorie_actualites',
    'image_categorie_actualites'
];

$page_title = 'Categories & Actualites' ;
$table_fields = [
    'Id',
    'Libellé',
    'Image',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteCategorieActu';
$editBtn_selector = 'btn-editCategorieActu';

