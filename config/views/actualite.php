<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_actualites';
$table_name ='laclef_actualites';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_actualites', 'uid', 'libelle_actualites', 'image_actualites_1', 'image_actualites_2',
    'image_actualites_3', 'image_actualites_4', 'description_actualites', 'type_actualites',
    'categorie_actualites', 'date_crea_actualites', 'etat_actualites', 'auteur',
    'datepublication', 'resume', 'type_article', 'titre_resume'
  ];
$page_title = 'Actualités';
$table_fields = ['Id', 'uid', 'libellé', 'image1','image2', 'image3', 'image4', 'description', 'type','categories','crée le' ,'état','auteur','republié le','resumé','type d\'article','titre resumé'];
$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteActu';
