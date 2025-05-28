<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_commodites';
$table_name ='laclef_commodites';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_commodites',
    'id_type',
    'libelle_type',
    'libelle_commodites',
    'image_commodites',
    'activeimage',
    'ispro',
    'code_commodite'
];
$page_title = 'Commodités';
$table_fields = [
    'Id',
    'Type',
    'Libellé_Type',
    'Libellé_Commodités',
    'Image',
    'Active Image',
    'Is Pro',
    'Code',
];
$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteCommodite';
