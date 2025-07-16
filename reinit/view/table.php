<?php 
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests();
$records = $operations->getAllDefault('myclean_reinit', 'id_reinit');
$data_keys = [
    'id_reinit', 'token_reinit', 'date_reinit', 'etat_reinit', 'id_email'
  ];
  require('../templates/tableLayout.php');
