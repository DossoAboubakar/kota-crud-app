<?php
require_once 'vendor/autoload.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$route = trim($uri, '/');

try {
    switch ($route) {
        case '':
        case 'dashboard':
            require('src/views/dashboard.php');
            break;
        case 'Clients':
            require('src/views/clients.php');
            break;
        case 'api/users/crudOps':
            include('routing/client.php');
            break;

        case 'Abonnements':
            //$controller->redirectToAbonnementListView();
            require('src/views/abonnements.php');
            break;
        case 'api/abonnements/crudOps':
                include('routing/abonnement.php');
                break;
        case 'Actualites':
                require('src/views/actualites.php');
                break;
        case 'api/actualites/crudOps':
                    include('routing/actualite.php');
                    break;
        case 'Alertes':
                require('src/views/alertes.php');
                break;
        case 'api/alertes/crudOps':
                    include('routing/alerte.php');
                    break;
        case 'AlertesCmdt':
                    require('src/views/alerte-cmdt.php');
                    break;
        case 'api/alertesCmdts/crudOps':
                        include('routing/alerte-cmdt.php');
                        break;
        case 'AlertesLocalites':
                    require('src/views/alertes-localites.php');
                    break;
        case 'api/alertesLocalites/crudOps':
                        include('routing/alerte-localite.php');
                        break;
        case 'Annees':
                require('src/views/annees.php');
                break;
        case 'api/annees/crudOps':
                        include('routing/annee.php');
                        break;
        case 'Annonces':
                require('src/views/annonces.php');
                break;
        case 'api/annonces/crudOps':
                        include('routing/annonce.php');
                        break;
        case 'AnnoncesCmdt':
                require('src/views/annonce-cmdts.php');
                break;
        case 'api/annoncesCmdts/crudOps':
                        include('routing/annonce-cmdts.php');
                        break;
        case 'Categories':
                require('src/views/categories.php');
                break;
        case 'api/categories/crudOps':
                        include('routing/categorie.php');
                        break;
        case 'CategoriesActu':
                require('src/views/categorie-actu.php');
                break;
        case 'api/categoriesActu/crudOps':
                        include('routing/categorie-actu.php');
                        break;
        case 'CategoriesClients':
                require('src/views/categories-clients.php');
                break;
        case 'api/categoriesClients/crudOps':
                        include('routing/categorie-client.php');
                        break;
        case 'Commodites':
                require('src/views/commodite.php');
                break;
        case 'api/commodites/crudOps':
                        include('routing/commodite.php');
                        break;
        case 'Communes':
                require('src/views/commune.php');
                break;
        case 'api/communes/crudOps':
                        include('routing/commune.php');
                        break;
        case 'Contacts':
                require('src/views/contact.php');
                break;
        case 'api/contacts/crudOps':
                        include('routing/contact.php');
                        break;
        case 'Demenagements':
                require('src/views/demenagement.php');
                break;
        case 'api/demenagements/crudOps':
                        include('routing/demenagement.php');
                        break;
        case 'Dossiers':
                require('src/views/dossier.php');
                break;
        case 'api/dossiers/crudOps':
                        include('routing/dossier.php');
                        break;
        case 'Equipes':
                require('src/views/equipe.php');
                break;
        case 'api/equipes/crudOps':
                        include('routing/equipe.php');
                        break;
        case 'Equipements':
                require('src/views/equipement.php');
                break;
        case 'api/equipements/crudOps':
                        include('routing/equipement.php');
                        break;
        case 'Estimations':
                require('src/views/estimation.php');
                break;
        case 'api/estimations/crudOps':
                        include('routing/estimation.php');
                        break;
        case 'EstimationsCmdt':
                require('src/views/estimation-commodite.php');
                break;
        case 'api/estimationsCmdt/crudOps':
                        include('routing/estimation-cmdt.php');
                        break;
        case 'Favoris':
                require('src/views/favoris.php');
                break;
        case 'api/favoris/crudOps':
                        include('routing/favoris.php');
                        break;
        case 'ImagesAgences':
                require('src/views/image-agence.php');
                break;
        case 'api/imagesAgences/crudOps':
                        include('routing/image-agence.php');
                        break;
        case 'ListeIndicateur':
                require('src/views/liste-indicateur.php');
                break;
        case 'api/listeIndicateurs/crudOps':
                        include('routing/liste-indicateur.php');
                        break;
        case 'ListeLocalisation':
                require('src/views/liste-localisation.php');
                break;
        case 'api/listeLocalisations/crudOps':
                        include('routing/liste-localisation.php');
                        break;
        case 'MessagesContacts':
                require('src/views/message-contact.php');
                break;
        case 'api/messagesContacts/crudOps':
                        include('routing/message-contact.php');
                        break;
        case 'Paiements':
                require('src/views/paiement.php');
                break;
        case 'api/paiements/crudOps':
                        include('routing/paiement.php');
                        break;
        case 'Pays':
                require('src/views/pays.php');
                break;
        case 'api/pays/crudOps':
                        include('routing/pays.php');
                        break;
        case 'Recherches':
                require('src/views/recherche.php');
                break;
        case 'api/recherches/crudOps':
                        include('routing/recherche.php');
                        break;
        case 'Relances':
                require('src/views/relance.php');
                break;
        case 'api/relances/crudOps':
                        include('routing/relance.php');
                        break;
        case 'Saves':
                require('src/views/saves.php');
                break;
        case 'api/saves/crudOps':
                        include('routing/saves.php');
                        break;
        case 'Signalements':
                require('src/views/signalement.php');
                break;
        case 'api/signalements/crudOps':
                        include('routing/signalement.php');
                        break;
        case 'Situations':
                require('src/views/situation.php');
                break;
        case 'api/situations/crudOps':
                        include('routing/situation.php');
                        break;
        case 'Transactions':
                require('src/views/transaction.php');
                break;
        case 'api/transactions/crudOps':
                        include('routing/transaction.php');
                        break;
        case 'TypesBienDetails':
                require('src/views/types_de_bien.php');
                break;
        case 'api/typesBienDetails/crudOps':
                        include('routing/types_de_bien.php');
                        break;
        case 'Vendeurs':
                require('src/views/vendeur.php');
                break;
        case 'api/vendeurs/crudOps':
                        include('routing/vendeur.php');
                        break;
        case 'Villes':
                require('src/views/ville.php');
                break;
        case 'api/villes/crudOps':
                        include('routing/ville.php');
                        break;
        default:
            http_response_code(404);
            echo "Page non trouvée";
    }

} catch (Exception $e) {
    http_response_code(500);
    echo "Erreur : " . $e->getMessage();
}
        