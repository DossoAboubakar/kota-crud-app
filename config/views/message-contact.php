<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_contacts';
$table_name ='laclef_msg_contacts';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_contacts',
    'nom',
    'email',
    'telephone',
    'message',
    'etat_contact',
    'date_crea'
];


$page_title = 'Liste des contacts';
$table_fields = [
    'Id',
    'Nom',
    'Email',
    'Telephone',
    'Message',
    'Etat',
    'Date de creation',
];
$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteMessageContact';
