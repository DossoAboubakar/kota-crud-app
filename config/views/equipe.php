<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_equipe';
$table_name ='laclef_equipe';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_equipe',
    'nom_equipe',
    'prenom_equipe',
    'poste_equipe',
    'id_agence',
    'date_crea'
];
$page_title = 'Equipes';
$table_fields = [
    'Id',
    'Nom',
    'Prenom',
    'Poste',
    'Agence',
    'Date creation',
];
$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteEquipe';
