const INNER_HTML = `<div style="display:flex ;">
                        <div class="alert alert-success py-1 px-2 mb-0" style="font-size: 0.9rem;">
                        ✅ Ajout effectué avec succès.
                        </div>
                        <div class="alert bg-dark text-white py-1 px-2 mb-0" style="font-size: 0.9rem; margin-right: 10px;">
                          Veuillez rafraîchir pour voir les nouvelles données
                        </div>
                        <button id="btn-refresh" class="btn btn-sm btn-warning btn-rounded py-0 px-2" style="font-size: 0.8rem;">
                        <i class="bi bi-arrow-repeat me-1"></i> Rafraîchir
                        </button>
                    </div>`;

export function deleteCategorieActu(id) {
  if (confirm("Voulez-vous vraiment supprimer  #" + id + " des catégories actus?")) {
    axios
      .delete(`api/categoriesActu/crudOps?id=${id}`)
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

export function addCategorieActu() {
  const libelle = document.getElementById("libelle_categorie_actualites").value;
  const image = document.getElementById("image_categorie_actualites").files[0];
  const formData = new FormData();
  formData.append("libelle", libelle);
  formData.append("image", image);
  axios
    .post("api/categoriesActu/crudOps", formData)
    .then(function (response) {
      console.log("addCategorieActu:", response);
      const alertArea = document.getElementById("alert-area");
      alertArea.innerHTML = INNER_HTML;

      document.getElementById("libelle_categorie_actualites").value = "";
      document.getElementById("image_categorie_actualites").value = "";
    })
    .catch(function (error) {
      console.error("Erreur lors de l'ajout:", error);
    });
}

export function updateCategorieActu(formData) {
  formData.append("_method", "PUT");
  axios
    .post("api/categoriesActu/crudOps", formData, {
      headers: {
        "Content-Type": "multipart/form-data",
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

export function getCategorieActuById(id) {
  console.log("id", id);
  axios
    .get(`api/categoriesActu/crudOps`, {
      params: {
        id: id,
      },
    })
    .then((response) => {
      console.log("data", response);
      const data = response.data.data[0];
      populateEditFormFields(data);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
    });
}

export function populateEditFormFields(data) {
  console.log("populateEditFormFields", data);
  const data_keys = ["id_categorie_actualites", "libelle_categorie_actualites"];
  data_keys.forEach((element) => {
    const input = document.getElementById(element + "Field");
    if (input) {
      input.value = data[element];
    }
  });
}

export function collectEditFormData(e) {
  e.preventDefault();
  const id = document.getElementById("id_categorie_actualitesField").value;
  const libelle = document.getElementById("libelle_categorie_actualitesField").value;
  const image_categorie = document.getElementById("image_categorie_actualitesField")
    .files[0];
  const formData = new FormData();
  formData.append("id", id);
  formData.append("libelle", libelle);
  formData.append("image", image_categorie);
  updateCategorieActu(formData);
}
