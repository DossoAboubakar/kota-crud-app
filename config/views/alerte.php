<?php 

use Application\CrudRepository\CrudRequests;

$operations = new CrudRequests();
$records = $operations->getAllDefault('laclef_alerte' , 'id_alerte');
$primary_key='id_alerte';
$data_keys = [
    'id_alerte', 'id_user', 'titre_alerte', 'emailalerte', 'typealerte1', 'typealerte2', 'id_ui_alerte',
    'type_annonce', 'categorie_annonce', 'nbappartement', 'nbmaison', 'nbparking', 'nblocalcom',
    'nbfond', 'nbatelier', 'nbterrain', 'nbbureau', 'nbentrepot', 'nbcoworking',
    'surfaceterrainmin', 'surfaceterrainmax', 'surfacebienmin', 'surfacebienmax',
    'nbpiece', 'nbchambre', 'prixmin', 'prixmax', 'date_crea_bien', 'etat_alerte',
    'annonceparticuliere', 'annoncepro', 'annoncemeuble', 'annoncenonmeuble', 'locationcourteduree'
  ];
$page_title = 'Alertes';
$table_fields = [
    'ID', 'user id', 'Titre', 'Email', 'Type Alrt 1', 'Type Alrt 2', 'Identifiant UI',
    'Type d\'annonce', 'Catégorie', 'Nb Appartements', 'Nb Maisons', 'Nb Parkings', 'Nb Locaux Commerciaux',
    'Nb Fonds', 'Nb Ateliers', 'Nb Terrains', 'Nb Bureaux', 'Nb Entrepôts', 'Nb Coworkings',
    'Surface Terrain Min', 'Surface Terrain Max', 'Surface Bien Min', 'Surface Bien Max',
    'Nb Pièces', 'Nb Chambres', 'Prix Min', 'Prix Max', 'Date Création Bien', 'État',
    'Annonce Particulière', 'Annonce Pro', 'Annonce Meublée', 'Annonce Non Meublée', 'Location Courte Durée'
  ];
$display_addBtn = false;
$deleteBtn_selector = 'btn-deleteAlerte';
$displayEditBtn = false;
