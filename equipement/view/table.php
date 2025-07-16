<?php 
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests();
$records = $operations->getAllDefault('myclean_equipement' , 'id_equipement');
$data_keys = [
    'id_equipement', 'libelle_equipement',
  ];
  require('../templates/tableLayout.php');
