console.log("Le fichier index.js est bien chargé !");

window.populateEditModal = function (id) {
  console.log(id);
  getItemById(id);
};

function getItemById(id) {
  const formData = new FormData();
  formData.append("id", id);

  axios
    .post("webUser/crud.php", formData)
    .then((response) => {
      console.log(response);
      populateEditFormFields(response.data.data);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
    });
}

function populateEditFormFields(data) {
  console.log(data);
  const data_keys = [
    "id",
    "nom",
    "prenom",
    "email",
    "login",
    "mdp",
    "type",
    "numero",
    "etat",
  ];

  data_keys.forEach((element) => {
    const input = document.getElementById(element + "2");
    if (input) {
      input.value = data[element];
    }
  });
}
