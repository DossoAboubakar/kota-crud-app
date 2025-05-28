import { deleteAbonnement } from "./EventManagers/abonnement.js";
import { deleteActualite } from "./EventManagers/actualite.js";
import { deleteAlerte } from "./EventManagers/alerte.js";
import { deleteAlerteCmdt } from "./EventManagers/alerte-cmdt.js";
import { deleteAlerteLocalite } from "./EventManagers/alerte-localite.js";
import { deleteAnnonce } from "./EventManagers/annonce.js";
import { deleteCategorieClient } from "./EventManagers/categorie-client.js";
import { deleteCommodite } from "./EventManagers/commodite.js";
import { deleteCommune } from "./EventManagers/commune.js";
import { deleteContact } from "./EventManagers/contact.js";
import { deleteDemenagement } from "./EventManagers/demenagement.js";
import { deleteDossier } from "./EventManagers/dossier.js";
import { deleteEstimation } from "./EventManagers/estimation.js";
import { deleteEstimationCmdt } from "./EventManagers/estimation-commodites.js";
import { deleteImageAgence } from "./EventManagers/image-agence.js";
import { deleteIndicateur } from "./EventManagers/liste-indicateur.js";
import { deleteListeLocalisation } from "./EventManagers/liste-localisation.js";
import { deleteMessageContact } from "./EventManagers/message-contact.js";
import { deletePaiement } from "./EventManagers/paiement.js";
import { deletePays } from "./EventManagers/pays.js";
import { deleteSave } from "./EventManagers/saves.js";
import { deleteSignalement } from "./EventManagers/signalement.js";
import { deleteSituation } from "./EventManagers/situation.js";
import { deleteTransaction } from "./EventManagers/transaction.js";
import { deleteTypeBienDetail } from "./EventManagers/types_de_bien.js";
import { deleteVendeur } from "./EventManagers/vendeur.js";
import { deleteVille } from "./EventManagers/ville.js";
import { AnneeEventListeners } from "./EventsListeners/annee.js";
import { CategoriesEventListeners } from "./EventsListeners/categorie.js";
import { FavorisEventListeners } from "./EventsListeners/favoris.js";

$(document).ready(function () {
  $("#data-table").DataTable({
    responsive: true,
    scrollX: 1065,
    scrollY: 500,
  });

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
  const deleteAbnmtButtons = document.querySelectorAll(".btn-deleteAbnmt");
  deleteAbnmtButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const id = this.dataset.id;
      deleteAbonnement(id);
    });
  });
});

const deleteActuButtons = document.querySelectorAll(".btn-deleteActu");
deleteActuButtons.forEach((button) => {
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteActualite(id);
  });
});

const deleteAlerteButtons = document.querySelectorAll(".btn-deleteAlerte");
deleteAlerteButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteAlerte(id);
  });
});

const deleteAlerteCmdtuttons = document.querySelectorAll(
  ".btn-deleteAlerteCmdt"
);
deleteAlerteCmdtuttons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteAlerteCmdt(id);
  });
});

const deleteAlerteLocaliteButtons = document.querySelectorAll(
  ".btn-deleteAlerteLocalite"
);
deleteAlerteLocaliteButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteAlerteLocalite(id);
  });
});

const deleteAnnonceButtons = document.querySelectorAll(".btn-deleteAnnonce");
deleteAnnonceButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteAnnonce(id);
  });
});

const deleteAnnonceCmdtButtons = document.querySelectorAll(
  ".btn-deleteAnnonceCmdt"
);
deleteAnnonceCmdtButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteAnnonceCmdt(id);
  });
});

const deleteCategorieActuButtons = document.querySelectorAll(
  ".btn-deleteCategorieActu"
);
deleteCategorieActuButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteCategorieActu(id);
  });
});

const deleteCategorieClientButtons = document.querySelectorAll(
  ".btn-deleteCategorieClient"
);
deleteCategorieClientButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteCategorieClient(id);
  });
});

const deleteCommoditeButtons = document.querySelectorAll(
  ".btn-deleteCommodite"
);
deleteCommoditeButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteCommodite(id);
  });
});

const deleteCommuneButtons = document.querySelectorAll(".btn-deleteCommune");
deleteCommuneButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteCommune(id);
  });
});

const deleteContactButtons = document.querySelectorAll(".btn-deleteContact");
deleteContactButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteContact(id);
  });
});

const deleteDemenagementButtons = document.querySelectorAll(
  ".btn-deleteDemenagement"
);
deleteDemenagementButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteDemenagement(id);
  });
});

const deleteDossierButtons = document.querySelectorAll(".btn-deleteDossier");
deleteDossierButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteDossier(id);
  });
});

const deleteEquipeButtons = document.querySelectorAll(".btn-deleteEquipe");
deleteEquipeButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteEquipe(id);
  });
});

const deleteEquipementButtons = document.querySelectorAll(
  ".btn-deleteEquipement"
);
deleteEquipementButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteEquipement(id);
  });
});

const deleteEstimationButtons = document.querySelectorAll(
  ".btn-deleteEstimation"
);
deleteEstimationButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteEstimation(id);
  });
});

const deleteEstimationCmdtButtons = document.querySelectorAll(
  ".btn-deleteEstimationCmdt"
);
deleteEstimationCmdtButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteEstimationCmdt(id);
  });
});


const deleteImageAgenceButtons = document.querySelectorAll(
  ".btn-deleteImageAgence"
);
deleteImageAgenceButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteImageAgence(id);
  });
});

const deleteIndicateurButtons = document.querySelectorAll(
  ".btn-deleteIndicateur"
);
deleteIndicateurButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteIndicateur(id);
  });
});

const deleteListeLocalisationButtons = document.querySelectorAll(
  ".btn-deleteListeLocalisation"
);
deleteListeLocalisationButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteListeLocalisation(id);
  });
});

const deleteMessageContactButtons = document.querySelectorAll(
  ".btn-deleteMessageContact"
);
deleteMessageContactButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteMessageContact(id);
  });
});

const deletePaiementButtons = document.querySelectorAll(".btn-deletePaiement");
deletePaiementButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deletePaiement(id);
  });
});

const deletePaysButtons = document.querySelectorAll(".btn-deletePays");
deletePaysButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deletePays(id);
  });
});

const deleteRechercheButtons = document.querySelectorAll(
  ".btn-deleteRecherche"
);
deleteRechercheButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteRecherche(id);
  });
});

const deleteRelanceButtons = document.querySelectorAll(".btn-deleteRelance");
deleteRelanceButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteRelance(id);
  });
});

const deleteSaveButtons = document.querySelectorAll(".btn-deleteSave");
deleteSaveButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteSave(id);
  });
});
const deleteSignalementButtons = document.querySelectorAll(
  ".btn-deleteSignalement"
);
deleteSignalementButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteSignalement(id);
  });
});

const deleteSituationButtons = document.querySelectorAll(
  ".btn-deleteSituation"
);
deleteSituationButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteSituation(id);
  });
});

const deleteTransactionButtons = document.querySelectorAll(
  ".btn-deleteTransaction"
);
deleteTransactionButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteTransaction(id);
  });
});

const deleteTypeBienDetailButtons = document.querySelectorAll(
  ".btn-deleteTypeBienDetail"
);
deleteTypeBienDetailButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteTypeBienDetail(id);
  });
});

const deleteVendeurButtons = document.querySelectorAll(".btn-deleteVendeur");
deleteVendeurButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteVendeur(id);
  });
});

const deleteVilleButtons = document.querySelectorAll(".btn-deleteVille");
deleteVilleButtons.forEach((button) => {
  console.log("oikjdj");
  button.addEventListener("click", function () {
    const id = this.dataset.id;
    deleteVille(id);
  });
});

new AnneeEventListeners();
new CategoriesEventListeners();
new FavorisEventListeners();

document.addEventListener("click", function (e) {
  if (e.target && e.target.id === "btn-refresh") {
    location.reload();
  }
});


$(document).ready(function () {
  $("#addModal").on("shown.bs.modal", function () {
    $(".select").select2({
      dropdownParent: $("#addModal"),
    });
  });
  $(".flatpickr").flatpickr();
});

$(document).ready(function () {
  $("#editModal").on("shown.bs.modal", function () {
    $(".select").select2({
      dropdownParent: $("#editModal"),
    });
  });
  $(".flatpickr").flatpickr();
});
