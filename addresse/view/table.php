<?php 
use Application\CrudRepository\CrudAddresse;
$operations = new CrudAddresse();
$records = $operations->getAddresses();
$data_keys = [
    'id', 'addresse',
    'nom_client', 'prenom_client', 'telephone',
    'type','longitude','latitude',
    'ville','secteur', 'batiment',
    'numero', 'etat',
  ];
  require('../templates/tableLayout.php');
