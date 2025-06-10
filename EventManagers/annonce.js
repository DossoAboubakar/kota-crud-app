export function deleteAnnonce(id) {
  console.log("Tentative de suppression...");
  if (confirm("Voulez-vous vraiment supprimer  #" + id + " des années?")) {
    axios
      .delete(`api/annonces/crudOps?id=${id}`)
      .then(function (response) {
        console.log(response);
        const row = document.querySelector(`tr[data-id="${id}"]`);
        if (row) {
          row.remove();
        }
      })
      .catch(function (error) {
        console.error("Erreur lors de la suppression:", error);
      });
  }
}

export function updateAnnonce(formData) {
  const params = new URLSearchParams();
  formData.forEach((value, key) => {
    params.append(key, value);
  });

  axios
    .put("api/annonces/crudOps", params, {
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
    })
    .then(function (response) {
      console.log("Mise à jour réussie:", response);
      location.reload();
    })
    .catch(function (error) {
      console.error("Erreur lors de la mise à jour:", error);
    });
}

export function collectEditFormData(e) {
  e.preventDefault();
  const id = document.getElementById("id_annonce").value;
  const etat = document.getElementById("etat_annonce").value;
  const formData = new FormData();
  formData.append("id", id);
  formData.append("etat", etat);
  updateAnnonce(formData);
}
export function getAnnonceById(id) {
  axios
    .get(`api/annonces/crudOps`, {
      params: {
        id: id,
      },
    })
    .then((response) => {
      console.log(response);
      const data = response.data[0];
      populateEditFormFields(data);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
    });
}

export function populateEditFormFields(data) {
  console.log(data);
  const data_keys = ["id_annonce", "etat_annonce"];
  data_keys.forEach((element) => {
    const input = document.getElementById(element);
    if (input) {
      input.value = data[element];
    }
  });
}
