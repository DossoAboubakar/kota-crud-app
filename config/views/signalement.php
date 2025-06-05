<?php 

use Application\CrudRepository\CrudSignalement;
$primary_key='id_signalement';
$table_name ='laclef_signalement';
$operations = new CrudSignalement();
$records = $operations->getSignalements();
$data_keys = [
    'id_signalement',
    'annonce',
    'prix',
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
    'Annonce',
    'Prix',
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

