<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_categorie';
$table_name ='laclef_categorie';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_categorie',
    'libelle_categorie',
    'image_categorie',
    'image_categorie1',
    'particulier',
    'pro'
];

$page_title = 'Categories';
$table_fields = [
    'Id',
    'Libellé',
    'Image',
    'Image 1',
    'Particulier',
    'Pro',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteCategorie';
$editBtn_selector = 'btn-editCategorie';
