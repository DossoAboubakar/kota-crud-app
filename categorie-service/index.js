console.log("Le fichier index.js est bien chargé !");

window.populateEditModal = function (id) {
  console.log(id);
  getItemById(id);
};

function getItemById(id) {
  const formData = new FormData();
  formData.append("id", id);

  axios
    .post("categorie-service/crud.php", formData)
    .then((response) => {
      console.log("reponse:", response);
      console.log(response.data.data[0]);
      populateEditFormFields(response.data.data[0]);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
      console.log("id", id);
    });
}

function populateEditFormFields(data) {
  console.log("dataDansPopulateEditFormFields", data);
  document.getElementById("id2").value = data.id_categorie_service;
  document.getElementById("categorie2").value = data.id_categorie;
  document.getElementById("categorie12").value = data.id_categorie1;
  document.getElementById("libelle_categorie_service2").value =
    data.libelle_categorie_service;
  document.getElementById("description2").value =
    data.description_categorie_service;
  document.getElementById("statut2").value = data.etat_categorie_service;
}

$("#id_categorie").on("change", function () {
  const formData = new FormData();
  formData.append("id", $(this).val());
  console.log("categorieId", $(this).val());
  axios
    .post("categorie1/crud.php", formData, {
      action: "getSubCategories",
    })
    .then((response) => {
      console.log(response.data);
      $("#id_categorie1").html(response.data.libelle_categorie1);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
      $("#id_categorie1").html(
        '<option value="">-- Choisir une sous-catégorie --</option>'
      );
    });
});
