<?php 

use Application\CrudRepository\CrudAbonnement;
$operations = new CrudAbonnement();
$records = $operations->getAbonnements();
$primary_key='id';
$data_keys = ['id', 'nom_client' , 'prenom_client', 'numero_client' ,'abn_1','abn_2','abn_3','abn_4','etat_abonnement'];
$page_title = 'Abonnements';
$table_fields = ['Id', 'Nom clt', 'Prenom clt', 'numero clt','Abnmt1', 'Abnmt2', 'Abnmt3', 'Abnmt4', 'Etat',];
$display_addBtn = false;
$deleteBtn_selector = 'btn-deleteAbnmt';
$displayEditBtn = false;
