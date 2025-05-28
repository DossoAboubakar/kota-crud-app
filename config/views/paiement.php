<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_paiement';
$table_name ='laclef_paiement';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_paiement',
    'id_panier',
    'id_transaction_custom_abonnement',
    'nom_custom_abonnement',
    'prenom_custom_abonnement',
    'telephone_custom_abonnement',
    'montant_custom_abonnement',
    'devise_custom_abonnement',
    'email_custom_abonnement',
    'description_custom_abonnement',
    'customer_address',
    'customer_city',
    'customer_country',
    'customer_state',
    'customer_zip_code',
    'etat',
    'date_crea'
];
$page_title = 'Paiements';
$table_fields = [
    'Id',
    'Id panier',
    'Id transaction custom abonnement',
    'Nom custom abonnement',
    'Prenom custom abonnement',
    'Telephone custom abonnement',
    'Montant custom abonnement',
    'Devise custom abonnement',
    'Email custom abonnement',
    'Description custom abonnement',
    'Customer address',
    'Customer city',
    'Customer country',
    'Customer state',
    'Customer zip code',
    'Etat',
    'Date de creation',
];
$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deletePaiement';
