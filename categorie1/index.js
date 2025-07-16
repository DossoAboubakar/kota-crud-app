console.log("Le fichier index.js est bien chargé !");

window.populateEditModal = function (id) {
  console.log(id);
  getItemById(id);
};

function getItemById(id) {
  const formData = new FormData();
  formData.append("id", id);

  axios
    .post("categorie1/crud.php", {
      action: "loadSousCategories",
      id: categorieId,
    })
    .then((response) => {
      $("#id_categorie1").html(response.data);
    })
    .catch((error) => {
      $("#id_categorie1").html(
        '<option value="">-- Choisir une sous-catégorie --</option>'
      );
      console.error("Erreur lors de la récupération des données:", error);
    });
}

function populateEditFormFields(data) {
  console.log(data);
  const data_keys = [
    "id",
    "libelle_categorie1",
    "description_categorie1",
    "image_categorie1",
    "image_categorie11",
    "particulier",
    "pro",
    "id_categorie",
    "libelle_categorie",
  ];

  data_keys.forEach((element) => {
    const input = document.getElementById(element + "2");
    if (input) {
      input.value = data[element];
    }
  });
}
