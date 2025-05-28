
<?php 

use Application\CrudRepository\CrudRequests;
$primary_key='id_estimation';
$table_name ='laclef_estimation';
$operations = new CrudRequests();
$records = $operations->getAllDefault($table_name , $primary_key);
$data_keys = [
    'id_estimation',
    'id_user',
    'id_product',
    'libelle',
    'laville',
    'lacommune',
    'lazone',
    'lib_type_bien',
    'type_bien',
    'surfacedubien',
    'nbchambre',
    'nbsallebain',
    'nbtoilette',
    'nbpiece',
    'nbetage',
    'etat_estimation',
    'date_crea',
    'prixvente',
    'prixventemcarre',
    'prixbasvente',
    'prixhautvente',
    'prixloyer',
    'prixloyermcarre',
    'prixbasloyer',
    'prixhautloyer'
];


$page_title = 'Estimations';
$table_fields = [
    'Id_Estimation',
    'Id_User',
    'Id_Product',
    'Libelle',
    'Laville',
    'Lacommune',
    'Lazone',
    'Lib_type_bien',
    'Type_bien',
    'Surfacedubien',
    'Nbchambre',
    'Nbsallebain',
    'Nbtoilette',
    'Nbpiece',
    'Nbetage',
    'Etat_estimation',
    'Date_crea',
    'Prixvente',
    'Prixventemcarre',
    'Prixbasvente',
    'Prixhautvente',
    'Prixloyer',
    'Prixloyermcarre',
    'Prixbasloyer',
    'Prixhautloyer'
];
$display_addBtn = false;
$displayEditBtn = false;
$deleteBtn_selector = 'btn-deleteEstimation';
