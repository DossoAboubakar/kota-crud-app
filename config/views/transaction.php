<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_transaction';
$table_name ='laclef_transaction';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_transaction',
    'titre_transaction',
];

$page_title = 'Transactions';
$table_fields = [
    'Id Transaction',
    'Titre Transaction'
];

$display_addBtn = true;
$displayEditBtn = true;
$deleteBtn_selector = 'btn-deleteTransaction';
