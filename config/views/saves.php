<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_save';
$table_name ='laclef_save';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_save',
    'id_contact',
    'id_user',
    'etat_save',
    'date_crea_save'
];

$page_title = 'Saves';
$table_fields = [
    'Id Save',
    'Id Contact',
    'Id User',
    'Etat Save',
    'Date Crea Save',
];
$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteSave';
