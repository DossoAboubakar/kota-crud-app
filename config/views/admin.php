<?php 

use Application\CrudRepository\CrudRequests;

$operations = new CrudRequests();
$records = $operations->getAllDefault('laclef_admin' , 'id_admin');
$primary_key='id_admin';
$data_keys = [
    'id', 'login', 'password', 'statut', 
  ];
$page_title = 'Admin';
$table_fields = [
    'ID', 'Login', 'Password', 'Statut', 
  ];
$display_addBtn = false;
$deleteBtn_selector = 'btn-deleteAdmin';
$displayEditBtn = false;
