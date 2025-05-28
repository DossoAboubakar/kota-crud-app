<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_image_annonce';
$table_name ='laclef_image_agence';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_image_annonce',
    'id_user',
    'id_annonce',
    'libelle_image',
    'date_crea'
];

$page_title = 'Images des agences';
$table_fields = [
    'Id',
    'User',
    'Annonce',
    'Libelle',
    'Date creation',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteImageAgence';
