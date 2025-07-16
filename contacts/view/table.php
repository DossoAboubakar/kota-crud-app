<?php 
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests();
$records = $operations->getAllDefault('myclean_msg_contacts' , 'id_contacts');
$data_keys = [
    'id_contacts', 'nom', 'email', 'telephone', 'message', 'etat_contact', 'date_crea'
  ];
require('../templates/tableLayout.php');


