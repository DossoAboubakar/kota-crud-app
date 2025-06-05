<?php 

use Application\CrudRepository\CrudCommune;
$primary_key='id_commune';
$table_name ='laclef_commune';
$operations = new CrudCommune();
$records = $operations->getCommunes();
$data_keys = [
    'id_commune',
    'nom_ville',
    'libelle_commune',
];
$page_title = 'Communes';
$table_fields = [
    'Id',
    'Ville',
    'Commune',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteCommune';
$editBtn_selector = 'btn-editCommune';
