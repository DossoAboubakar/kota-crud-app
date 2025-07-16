console.log("Le fichier index.js est bien chargé !");

window.populateEditModal = function (id) {
  console.log(id);
  getItemById(id);
};

function getItemById(id) {
  const formData = new FormData();
  formData.append("id", id);
  axios
    .post("categorie-service-liste/crud.php", formData)
    .then((response) => {
      console.log("reponse:", response);
      console.log(response.data.data[0]);
      populateEditFormFields(response.data.data[0]);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
    });
}

function populateEditFormFields(data) {
  console.log("dataDansPopulateEditFormFields", data);
  document.getElementById("id2").value = data.id_categorie_service_liste;
  console.log("dataId", data.id_categorie_service_liste);
  document.getElementById("id_categorie2").value = data.id_categorie;
  document.getElementById("id_categorie_service2").value =
    data.id_categorie_service;
  document.getElementById("Catégorie2").value =
    data.libelle_categorie_service_liste;
  document.getElementById("Image2").value = data.img_categorie_service;
  document.getElementById("Description2").value =
    data.description_categorie_service_liste;
  document.getElementById("statut2").value = data.etat_categorie_service_liste;
  document.getElementById("Quantité2").value = data.qte;
  document.getElementById("Montant2").value = data.montant;
  document.getElementById("Prix2").value = data.prix;
}

$("#id_categorie").on("click", function () {
  const formData = new FormData();
  formData.append("id", $(this).val());
  console.log("categorieId", $(this).val());
  axios
    .post("categorie-service/crud.php", formData, {
      action: "getSubCategories",
    })
    .then((response) => {
      console.log(response.data);
      $("#id_categorie_service").html(response.data.libelle_categorie_service);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
      $("#id_categorie_service").html(
        '<option value="">-- Choisir une sous-catégorie --</option>'
      );
    });
});
