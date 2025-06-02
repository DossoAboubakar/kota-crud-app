
/**
 * Import Event Listeners
 */
import { AnneeEventListeners } from "./EventsListeners/annee.js";
import { CategoriesEventListeners } from "./EventsListeners/categorie.js";
import { FavorisEventListeners } from "./EventsListeners/favoris.js";
import { CategoriesActuEventListeners } from "./EventsListeners/categorie-actu.js";
import { AbonnementEventListeners } from "./EventsListeners/abonnement.js";
import { ActualiteEventListeners } from "./EventsListeners/actualite.js";
import { AlerteEventListeners } from "./EventsListeners/alerte.js";
import { AlerteCmdtEventListeners } from "./EventsListeners/alerte-commandite.js";
import { AlerteLocaliteEventListeners } from "./EventsListeners/alerte-localite.js";
import { AnnonceEventListeners } from "./EventsListeners/annonce.js";
import { AnnonceCmdtEventListeners } from "./EventsListeners/annonce-cmdt.js";
import { CommoditeEventListeners } from "./EventsListeners/commodite.js";
import { CommuneEventListeners } from "./EventsListeners/commune.js";
import { ContactEventListeners } from "./EventsListeners/contact.js";
import { DemenagementEventListeners } from "./EventsListeners/demenagement.js";
import { DossierEventListeners } from "./EventsListeners/dossier.js";
import { EquipeEventListeners } from "./EventsListeners/equipe.js";
import { EquipementEventListeners } from "./EventsListeners/equipement.js";
import { EstimationCmdtEventListeners } from "./EventsListeners/estimation-cmdt.js";
import { ImageAgenceEventListeners } from "./EventsListeners/image-agence.js";
import { IndicateurEventListeners } from "./EventsListeners/liste-indicateur.js";
import { ListeLocalisationEventListeners } from "./EventsListeners/liste-localisation.js";
import { MessageContactEventListeners } from "./EventsListeners/message-contact.js";
import { PaysEventListeners } from "./EventsListeners/pays.js";
import { RechercheEventListeners } from "./EventsListeners/recherche.js";
import { RelanceEventListeners } from "./EventsListeners/relance.js";
import { SaveEventListeners } from "./EventsListeners/save.js";
import { SignalementEventListeners } from "./EventsListeners/signalement.js";
import { SituationEventListeners } from "./EventsListeners/situation.js";
import { TypeDeBienEventListeners } from "./EventsListeners/types_de_bien.js";
import { VendeurEventListeners } from "./EventsListeners/vendeur.js";
import { VilleEventListeners } from "./EventsListeners/ville.js";
import { TransactionEventListeners } from "./EventsListeners/transaction.js";
/**
 * Executing Listeners
 */

new AnneeEventListeners();
new CategoriesEventListeners();
new FavorisEventListeners();
new CategoriesActuEventListeners();
new AbonnementEventListeners();
new ActualiteEventListeners();
new AlerteEventListeners();
new AlerteCmdtEventListeners();
new AlerteLocaliteEventListeners();
new AnnonceEventListeners();
new AnnonceCmdtEventListeners();
new CommoditeEventListeners();
new CommuneEventListeners();
new ContactEventListeners();
new DemenagementEventListeners();
new DossierEventListeners();
new EquipeEventListeners();
new EquipementEventListeners();
new EstimationCmdtEventListeners();
new ImageAgenceEventListeners();
new IndicateurEventListeners();
new ListeLocalisationEventListeners();
new MessageContactEventListeners();
new PaysEventListeners();
new RechercheEventListeners();
new RelanceEventListeners();
new SaveEventListeners();
new SignalementEventListeners();
new SituationEventListeners();
new TypeDeBienEventListeners();
new TransactionEventListeners();
new VendeurEventListeners();
new VilleEventListeners();


document.addEventListener("click", function (e) {
  if (e.target && e.target.id === "btn-refresh") {
    location.reload();
  }
});

$(document).ready(function () {
  $("#data-table").DataTable({
    responsive: true,
    scrollX: 1065,
    scrollY: 500,
  });


  /* Initialize select2 for addModal */
  $("#addModal").on("shown.bs.modal", function () {
    $(".select").select2({
      dropdownParent: $("#addModal"),
    });
  });
  $(".flatpickr").flatpickr();

  /* Initialize select2 for editModal */
  $("#editModal").on("shown.bs.modal", function () {
    $(".select").select2({
      dropdownParent: $("#editModal"),
    });
  });
  $(".flatpickr").flatpickr();
  

  /* Menu initializer */
  $("#menu-abonnement").on("click", function () {
    window.location.href = "/Abonnements";
  });
  $("#menu-actualités").on("click", function () {
    window.location.href = "/Actualites";
  });
  $("#menu-alertes").on("click", function () {
    window.location.href = "/Alertes";
  });
  $("#menu-alertesCmdt").on("click", function () {
    window.location.href = "/AlertesCmdt";
  });
  $("#menu-alertesLocalites").on("click", function () {
    window.location.href = "/AlertesLocalites";
  });
  $("#menu-années").on("click", function () {
    window.location.href = "/Annees";
  });
  $("#menu-annonces").on("click", function () {
    window.location.href = "/Annonces";
  });
  $("#menu-annoncesCommodités").on("click", function () {
    window.location.href = "/AnnoncesCmdt";
  });

  $("#menu-categories").on("click", function () {
    window.location.href = "/Categories";
  });

  $("#menu-categoriesActu").on("click", function () {
    window.location.href = "/CategoriesActu";
  });

  $("#menu-categoriesClients").on("click", function () {
    window.location.href = "/CategoriesClients";
  });

  $("#menu-commodités").on("click", function () {
    window.location.href = "/Commodites";
  });

  $("#menu-communes").on("click", function () {
    window.location.href = "/Communes";
  });

  $("#menu-contacts").on("click", function () {
    window.location.href = "/Contacts";
  });

  $("#menu-demenagements").on("click", function () {
    window.location.href = "/Demenagements";
  });

  $("#menu-dossiers").on("click", function () {
    window.location.href = "/Dossiers";
  });

  $("#menu-equipes").on("click", function () {
    window.location.href = "/Equipes";
  });

  $("#menu-equipements").on("click", function () {
    window.location.href = "/Equipements";
  });

  $("#menu-estimations").on("click", function () {
    window.location.href = "/Estimations";
  });

  $("#menu-estimationsCmdt").on("click", function () {
    window.location.href = "/EstimationsCmdt";
  });

  $("#menu-favoris").on("click", function () {
    window.location.href = "/Favoris";
  });

  $("#menu-imagesAgences").on("click", function () {
    window.location.href = "/ImagesAgences";
  });

  $("#menu-indicateurs").on("click", function () {
    window.location.href = "/ListeIndicateur";
  });

  $("#menu-localisations").on("click", function () {
    window.location.href = "/ListeLocalisation";
  });

  $("#menu-messagesContacts").on("click", function () {
    window.location.href = "/MessagesContacts";
  });

  $("#menu-paiements").on("click", function () {
    window.location.href = "/Paiements";
  });
  $("#menu-pays").on("click", function () {
    window.location.href = "/Pays";
  });
  $("#menu-recherches").on("click", function () {
    window.location.href = "/Recherches";
  });
  $("#menu-relances").on("click", function () {
    window.location.href = "/Relances";
  });
  $("#menu-saves").on("click", function () {
    window.location.href = "/Saves";
  });
  $("#menu-signalements").on("click", function () {
    window.location.href = "/Signalements";
  });
  $("#menu-situations").on("click", function () {
    window.location.href = "/Situations";
  });
  $("#menu-transactions").on("click", function () {
    window.location.href = "/Transactions";
  });

  $("#menu-typesBienDetails").on("click", function () {
    window.location.href = "/TypesBienDetails";
  });

  $("#menu-villes").on("click", function () {
    window.location.href = "/Villes";
  });

  $("#menu-vendeurs").on("click", function () {
    window.location.href = "/Vendeurs";
  });
});
