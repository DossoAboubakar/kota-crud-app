<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_demenagement';
$table_name ='laclef_demenagement';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_demenagement',
    'nom',
    'telephone',
    'email',
    'surface',
    'nbpieces',
    'datedemenagement',
    'adresseactuelle',
    'newadresse',
    'description',
    'etat_contact',
    'date_crea',
    'indicatif',
    'pays'
];
$page_title = 'Démenagements';
$table_fields = [
    'Id',
    'Nom',
    'Telephone',
    'Email',
    'Surface',
    'Nbr Pieces',
    'Date',
    '@Actuelle',
    'Nouvelle @',
    'Description',
    'Etat Contact',
    'Date Création',
    'Indicatif',
    'Pays'
];
$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteDemenagement';
