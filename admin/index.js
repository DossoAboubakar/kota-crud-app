console.log("Le fichier index.js est bien chargé !");

window.populateEditModal = function (id) {
  console.log(id);
  getItemById(id);
};

function getItemById(id) {
  const formData = new FormData();
  formData.append("id", id);

  axios
    .post("admin/crud.php", formData)
    .then((response) => {
      console.log(response.data.data[0]);
      populateEditFormFields(response.data.data[0]);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
    });
}

function populateEditFormFields(data) {
  console.log("dataDansPopulateEditFormFields", data);
  document.getElementById("id").value = data.id;
  console.log("dataId", data.id);
  const data_keys = ["id", "login", "statut", "mdp"];
  data_keys.forEach((element) => {
    const input = document.getElementById(element + "2");
    if (input) {
      input.value = data[element];
    }
  });
}
