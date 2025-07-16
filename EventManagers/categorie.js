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

export function deleteCategorie(id) {
  if (confirm("Voulez-vous vraiment supprimer  #" + id + " des catégories?")) {
    axios
      .delete(`api/categories/crudOps?id=${id}`)
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

export function addCategorie() {
  const libelle = document.getElementById("libelle_categorie").value;
  const image = document.getElementById("image_categorie").files[0];
  const image1 = document.getElementById("image_categorie1").files[0];
  const particulier = document.getElementById("particulier").value;
  const pro = document.getElementById("pro").value;
  const formData = new FormData();
  formData.append("libelle", libelle);
  formData.append("image", image);
  formData.append("image1", image1);
  formData.append("particulier", particulier);
  formData.append("pro", pro);
  axios
    .post("api/categories/crudOps", formData)
    .then(function (response) {
      console.log("addCategorie:", response);
      const alertArea = document.getElementById("alert-area");
      alertArea.innerHTML = INNER_HTML;

      document.getElementById("libelle_categorie").value = "";
      document.getElementById("image_categorie").value = "";
      document.getElementById("image_categorie1").value = "";
      document.getElementById("particulier").value = "";
      document.getElementById("pro").value = "";
    })
    .catch(function (error) {
      alert("Veuillez remplir tous les champs");
      console.error("Erreur lors de l'ajout:", error);
    });
}

export function updateCategorie(formData) {
  formData.append("_method", "PUT");
  axios
    .post("api/categories/crudOps", formData, {
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
      alert("Veuillez remplir tout les champs");
    });
}

export function getCategorieById(id) {
  axios
    .get(`api/categories/crudOps`, {
      params: {
        id: id,
      },
    })
    .then((response) => {
      const data = response.data.data[0];
      console.log("data", data);
      populateEditFormFields(data);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
    });
}

export function populateEditFormFields(data) {
  console.log("populateEditFormFields", data);
  const data_keys = ["id_categorie", "libelle_categorie", "", "pro"];
  data_keys.forEach((element) => {
    const input = document.getElementById(element + "Field");
    if (input) {
      input.value = data[element];
    }
  });
}

export function collectEditFormData(e) {
  e.preventDefault();
  const id = document.getElementById("id_categorieField").value;
  const libelle = document.getElementById("libelle_categorieField").value;
  const image_categorie = document.getElementById("image_categorieField")
    .files[0];
  const image_categorie1 = document.getElementById("image_categorie1Field")
    .files[0];
  const particulier = document.getElementById("particulierField").value;
  const pro = document.getElementById("proField").value;
  const formData = new FormData();
  formData.append("id", id);
  formData.append("libelle", libelle);
  formData.append("image_categorie", image_categorie);
  formData.append("image_categorie1", image_categorie1);
  formData.append("particulier", particulier);
  formData.append("pro", pro);
  updateCategorie(formData);
}
