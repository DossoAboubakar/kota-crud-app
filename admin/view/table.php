<?php 
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests();
$records = $operations->getAllDefault('myclean_admin' , 'id');
$data_keys = [
    'id', 'login', 'mdp', 'statut', 
  ];
require('../templates/tableLayout.php');


