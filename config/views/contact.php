<?php 

use Application\CrudRepository\CrudContact;
$primary_key='id_contacts';
$table_name ='laclef_contacts';
$operations = new CrudContact();
$records = $operations->getContacts();
$data_keys = [
    'id_contacts',
    'annonce',
    'prix',
    'agence',
    'immatriculation',
    'adresse',
    'nom',
    'email',
    'telephone',
    'acheteur',
    'locataire',
    'message',
    'etat_contact',
    'date_crea',
    'indicUser',
    'votrerecherche',
    'libvotrerecherche',
    'votretype',
    'libvotretype',
    'surfacebienmin',
    'surfacebienmax',
    'prixmin',
    'prixmax'
];

$page_title = 'Contacts';
$table_fields = [
    'Id',
    'Annonce',
    'Prix ',
    'Agence',
    'Immatriculation',
    'Adresse',
    'Nom',
    'Email',
    'Telephone',
    'Acheteur',
    'Locataire',
    'Message',
    'Etat',
    'Date',
    'IndicUser',
    'Votrerecherche',
    'Libvotrerecherche',
    'Votretype',
    'Libvotretype',
    'Surfacebienmin',
    'Surfacebienmax',
    'Prixmin',
    'Prixmax',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteContact';
$editBtn_selector = 'btn-editContact';

