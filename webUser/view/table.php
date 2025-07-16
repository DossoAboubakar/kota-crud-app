<?php 
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests();
$records = $operations->getAllDefault('myclean_web_user', 'id_user');
$data_keys = [
    'id_user', 'nom_user',
    'prenom_user', 'email_user', 'login_user',
    'mdp_user','type_user',
    'etat',
  ];
  require('../templates/tableLayout.php');
