<?php 

use Application\CrudRepository\CrudListeLocalisation;
$primary_key='id';
$table_name ='laclef_liste_localisation';
$operations = new CrudListeLocalisation();
$records = $operations->getListeLocalisation();

$data_keys = [
    'id',
    'code',
    'ville',
    'commune',
    'id_zone',
    'zone',
    'identifiant',
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
    'Id zone',
    'Zone',
    'Identifiant',
    'Latitude',
    'Longitude',
    'Etat',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteListeLocalisation';
$editBtn_selector = 'btn-editListeLocalisation';

