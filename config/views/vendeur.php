<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_vendeur';
$table_name ='myclean_vendeur';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_vendeur',
    'id_pro',
    'type_vendeur',
    'mdp_vendeur',
    'image',
    'description_vendeur',
    'nomsociete1',
    'statut1',
    'immatriculation1',
    'adresse1',
    'legerant1',
    'lenom1',
    'leprenom1',
    'indicatif',
    'letelephone1',
    'lemail1',
    'etat_vendeur',
    'date_crea_vendeur',
    'horaires',
    'equipes',
    'uid1',
    'nb_unite'
];

$page_title = 'Vendeurs';
$table_fields = [
    'Id Vendeur',
    'Id Pro',
    'Type Vendeur',
    'Mdp Vendeur',
    'Image',
    'Description Vendeur',
    'Nom Societe',
    'Statut',
    'Immatriculation',
    'Adresse',
    'Legerant',
    'Nom',
    'Prenom',
    'Indicatif',
    'Telephone',
    'Email',
    'Etat Vendeur',
    'Date Creation',
    'Horaires',
    'Equipes',
    'Uid',
    'Nb Unite'
];

$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteVendeur';
$editBtn_selector = 'btn-editVendeur';

