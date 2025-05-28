<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_contacts';
$table_name ='laclef_contacts';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_contacts',
    'id_annonce',
    'id_agence',
    'id_user',
    'nom',
    'email',
    'telephone',
    'acheteur',
    'locataire',
    'message',
    'etat_contact',
    'date_crea',
    'indicUser',
    'votrerecherche',
    'libvotrerecherche',
    'votretype',
    'libvotretype',
    'surfacebienmin',
    'surfacebienmax',
    'prixmin',
    'prixmax'
];

$page_title = 'Contacts';
$table_fields = [
    'Id',
    'Annonce',
    'Agence',
    'User',
    'Nom',
    'Email',
    'Telephone',
    'Acheteur',
    'Locataire',
    'Message',
    'Etat',
    'Date',
    'IndicUser',
    'Votrerecherche',
    'Libvotrerecherche',
    'Votretype',
    'Libvotretype',
    'Surfacebienmin',
    'Surfacebienmax',
    'Prixmin',
    'Prixmax',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteContact';
