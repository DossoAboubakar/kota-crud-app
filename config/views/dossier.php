<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_dossier';
$table_name ='laclef_dossier';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_dossier',
    'token',
    'id_client',
    'nom',
    'prenom',
    'indicatif',
    'telephone',
    'email',
    'statut',
    'lib_statut',
    'avoirenfant',
    'enfant',
    'colocation',
    'situationpro',
    'revenue',
    'situationpro_conjoint',
    'revenue_conjoint',
    'garant',
    'revenue_garant',
    'message',
    'etat_dossier',
    'date_crea_dossier'
];

$page_title = 'Dossiers';
$table_fields = [
    'Id',
    'Token',
    'Client',
    'Nom',
    'Prenom',
    'Indicatif',
    'Telephone',
    'Email',
    'Statut',
    'Lib_statut',
    'Avoir enfant',
    'Enfant',
    'Colocation',
    'Situation pro',
    'Revenue',
    'Situation pro conjoin',
    'Revenue conjoin',
    'Garant',
    'Revenue garant',
    'Message',
    'Etat dossier',
    'Date creation dossier',
];
$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteDossier';
