<?php 
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests();
$records = $operations->getAllDefault('myclean_annonce' , 'id_annonce');
$data_keys = [
  'id_annonce', 'uid', 'libelle_annonce', 'image_annonce_1', 'description_annonce', 'titre_transaction', 'prix_annonce', 'categorie_annonce', 'vendeur_annonce', 'vendeur_type', 'date_crea_annonce', 'etat_annonce', 'token', 'surfacebien', 'nbpiece', 'nbchambre', 'nbsallebain', 'nbtoilette', 'meuble', 'nbplace', 'isexclu', 'terasse', 'balcon', 'neuf', 'garage', 'cave', 'handicape', 'montanthonoraire', 'loyersanscharges', 'charges', 'montanttotal', 'prixgarantie', 'moisgarantie', 'descriptiongarantie', 'descriptionbien', 'adressebien', 'longitude', 'latitude', 'nompseudo', 'numerotel', 'zonebien', 'communebien', 'villebien', 'ispro', 'typebien', 'surfaceterrain', 'anneedubien', 'titrevideo', 'sizevideo', 'formatvideo', 'lienvideo'
];
require('../templates/tableLayout.php');


