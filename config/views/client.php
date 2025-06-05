<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_client';
$table_name ='laclef_client';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$page_title = 'Clients' ;

$data_keys = [
    'id_client',
    'nom_client',
    'prenom_client',
    'indicatif',
    'tel_client',
    'email_client',
    'token',
    'mdp_client',
    'etat_client',
    'communeUser',
    'adresseUser',
    'paysUser',
    'date_creation_client',
];
$table_fields = [
    'Id',
    'Nom',
    'Prenom',
    'Indicatif',
    'Numero',
    'Email',
    'Token',
    'Mdp',
    'Etat',
    'Commune',
    'Adresse',
    'Pays',
    'Date de creation',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteClient';
$addBtn_selector = 'btn-addClient';
$editBtn_selector = 'btn-editUser';


