<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_typebien_detail';
$table_name ='laclef_typebien_detail';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_typebien_detail',
    'libelle_typebien_detail',
    'image_typebien_detail'
];

$page_title = 'Types de bien & Details';
$table_fields = [
    'Id Type de bien',
    'Libelle Type de bien',
    'Image Type de bien'
];

$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteTypeBienDetail';
$editBtn_selector = 'btn-editTypeBienDetail';
