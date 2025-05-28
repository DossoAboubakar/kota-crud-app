<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_liste';
$table_name ='laclef_liste_localisation';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_liste',
    'code_liste',
    'id_ville',
    'libelle_ville',
    'id_commune',
    'libelle_commune',
    'id_zone',
    'libelle_zone',
    'libelle_localisation',
    'id_localisation',
    'latitude',
    'longitude',
    'etat'
];


$page_title = 'Liste des localisations';
$table_fields = [
    'Id',
    'Code',
    'Ville',
    'Commune',
    'Zone',
    'libelle commune',
    'id_zone',
    'libelle zone',
    'libelle localisation',
    'id_localisation',
    'latitude',
    'longitude',
    'etat',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteListeLocalisation';
