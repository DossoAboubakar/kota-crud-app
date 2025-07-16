<?php 
use Application\CrudRepository\CrudCategorieService;
$operations = new CrudCategorieService();
$records = $operations->getCategorieService();
$data_keys = [
    'id', 'categorie', 'categorie1', 'libelle_categorie_service', 'description', 'image', 'etat', 
  ];
$table_fields = [
    'id', 'categorie', 'categorie1', 'libelle_categorie_service', 'description', 'image', 'etat'
];  
require('../templates/tableLayout.php');


