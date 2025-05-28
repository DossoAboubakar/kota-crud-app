<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_annee';
$table_name ='laclef_annee';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_annee',
    'libelle_annee',
];

$page_title = 'Années';
$table_fields = [
    'Id',
    'Libellé',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteAnnee';
$editBtn_selector = 'btn-editAnnee';
