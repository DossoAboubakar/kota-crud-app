console.log("Le fichier index.js est bien chargé !");

window.populateEditModal = function (id) {
  console.log(id);
  getItemById(id);
};
/**
 * Cette fonction permet de recuperer les données d'un element selon son id
 * @param {number} id
 */
function getItemById(id) {
  const formData = new FormData();
  formData.append("id", id);

  axios
    .post("contacts/crud.php", formData)
    .then((response) => {
      console.log(response);
      populateEditFormFields(response.data.data);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
    });
}

/**
 * Cette fonction permet de remplir les champs du formulaire d'edition
 * @param {Object} data
 */
function populateEditFormFields(data) {
  console.log("dataDansPopulateEditFormFields", data);
  const data_keys = ["id", "nom", "email", "telephone", "message", "etat"];
  data_keys.forEach((element) => {
    const input = document.getElementById(element + "2");
    if (input) {
      input.value = data[element];
    }
  });
}
