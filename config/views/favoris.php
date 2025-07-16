<?php 

use Application\CrudRepository\CrudFavoris;
$primary_key='id_favoris';
$table_name ='myclean_favoris';
$operations = new CrudFavoris();
$records = $operations->getFavoris();
$data_keys = [
    'id_favoris',
    'nom_client',
    'prenom_client',
    'tel_client',
    'libelle_annonce',
    'prix_annonce',
    'date_ajout'
];

$page_title = 'Favoris';
$table_fields = [
    'Id',
    'Nom Client',
    'Prenom Client',
    'Tel Client',
    'Annonce',
    'Prix(FCFA)',
    'Date creation',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteFavoris';
$editBtn_selector = 'btn-editFavoris';
$deleteBtn_name = 'Supprimer';
