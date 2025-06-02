<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_signalement';
$table_name ='laclef_signalement';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_signalement',
    'id_annonce',
    'id_user',
    'nom',
    'email',
    'telephone',
    'message',
    'motif',
    'etat_contact',
    'date_crea'
];


$page_title = 'Signalement';
$table_fields = [
    'Id Signalement',
    'Id Annonce',
    'Id User',
    'Nom',
    'Email',
    'Telephone',
    'Message',
    'Motif',
    'Etat Contact',
    'Date Crea',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteSignalement';
$editBtn_selector = 'btn-editSignalement';

