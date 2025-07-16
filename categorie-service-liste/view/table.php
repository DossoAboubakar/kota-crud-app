<?php 
require_once __DIR__ . '/../../vendor/autoload.php';

use Application\CrudRepository\CrudCategorieListe;

$operations = new CrudCategorieListe();
$records = $operations->getCategorieListe();
$data_keys = [
  'id', 
  'categorie_liste', 
  'libelle_categorie', 
  'libelle_categorie_service', 
  'description', 
  'image', 
  'quantite', 
  'montant', 
  'prix', 
  'etat'
];

$table_fields = [
  'Id', 
  'Catégorie liste', 
  'Catégorie', 
  'Service', 
  'Description', 
  'Image', 
  'Quantité', 
  'Montant', 
  'Prix', 
  'État'
];

require('../templates/tableLayout.php');


