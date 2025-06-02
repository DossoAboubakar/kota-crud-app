<?php 

use Application\CrudRepository\CrudImageAgence;
$primary_key='id_image_annonce';
$table_name ='laclef_image_agence';
$operations = new CrudImageAgence();
$records = $operations->getImageAgence();
$data_keys = [
    'id_image_annonce',
    'nom_client',
    'prenom_client',
    'tel_client',
    'libelle_annonce',
    'prix_annonce',
    'libelle_image',
    'date_crea'
];

$page_title = 'Images des agences';
$table_fields = [
    'Id',
    'Nom',
    'Prenom',
    'Tel',
    'Annonce',
    'Prix',
    'Image',
    'Date creation',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteImageAgence';
$editBtn_selector = 'btn-editImageAgence';
