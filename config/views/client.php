<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Application\CrudRepository\CrudRequests;
$primary_key='id_client';
$table_name ='myclean_client';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$page_title = 'Clients' ;

$data_keys = [
    'id_client',
    'nom_client',
    'prenom_client',
    'photoprofil',
    'tel_client',
    'email_client',
    'token',
    'mdp_client',
    'etat_client',
    'communeUser',
    'adresseUser',
    'codereinit',
    'expirationcode',
    'date_creation_client',
];
$table_fields = [
    'Id',
    'Nom',
    'Prenom',
    'Photo',
    'Numero',
    'Email',
    'Token',
    'Mdp',
    'Etat',
    'Commune',
    'Adresse',
    'Code reinitialisation',
    'Expiration code',
    'Date de creation',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteUser';
$deleteBtn_name = 'btn-deleteUser';
$addBtn_selector = 'btn-addClient';
$editBtn_selector = 'btn-editUser';


