<?php 
use Application\CrudRepository\CrudCategorie1;
$operations = new CrudCategorie1();
$records = $operations->getCategorie1();
$data_keys = [
    'id', 'libelle_categorie',
    'libelle_categorie1', 'description_categorie1',
    'image_categorie1', 'image_categorie11',
    'particulier', 'pro',
  ];
  require('../templates/tableLayout.php');
