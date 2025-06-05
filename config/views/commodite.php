<?php 

use Application\CrudRepository\CrudCommodite;
$primary_key='id_commodites';
$table_name ='laclef_commodites';
$operations = new CrudCommodite();
$records = $operations->getCommodites();
$data_keys = [
    'id_commodites',
    'type',
    'titre',
    'image',
    'activeimage',
    'ispro',
    'code'
];
$page_title = 'Commodités';
$table_fields = [
    'Id',
    'Type',
    'Titre',
    'Image',
    'Active Image',
    'Is Pro',
    'Code',
];
$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteCommodite';
$addBtn_selector = 'btn-addCommodite';
$editBtn_selector = 'btn-editCommodite';

