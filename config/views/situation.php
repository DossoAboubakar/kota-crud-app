<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_situation';
$table_name ='laclef_situation';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_situation',
    'code_situation',
    'libelle_situation'
];

$page_title = 'Situations';
$table_fields = [
    'Id Situation',
    'Code',
    'Libelle',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteSituation';
