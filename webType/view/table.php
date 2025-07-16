<?php 
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests();
$records = $operations->getAllDefault('myclean_web_type', 'id_type');
$data_keys = [
    'id_type', 'lib_typ',
];
require('../templates/tableLayout.php');
