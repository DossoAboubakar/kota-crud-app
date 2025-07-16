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

export function deleteCategorieClient(id) {
  if (
    confirm("Voulez-vous vraiment supprimer  #" + id + " des catégories actus?")
  ) {
    axios
      .delete(`api/categoriesClient/crudOps?id=${id}`)
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

export function addCategorieClient() {
  const libelle = document.getElementById("libelle_categorie_client").value;
  const formData = new FormData();
  formData.append("libelle", libelle);
  axios
    .post("api/categoriesClient/crudOps", formData)
    .then(function (response) {
      console.log("addCategorieClient:", response);
      const alertArea = document.getElementById("alert-area");
      alertArea.innerHTML = INNER_HTML;

      document.getElementById("libelle_categorie_client").value = "";
    })
    .catch(function (error) {
      console.error("Erreur lors de l'ajout:", error);
      alert("Veuillez remplir tous les champs");
    });
}

export function updateCategorieClient(formData) {
  axios
    .put("api/categoriesClient/crudOps", formData, {
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
      alert("Veuillez remplir tous les champs");
    });
}

export function getItemById(id) {
  console.log("id", id);
  axios
    .get(`api/categoriesClient/crudOps`, {
      params: {
        id: id,
      },
    })
    .then((response) => {
      console.log("data", response);
      const data = response.data.data[0];
      populateEditModal(data);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
    });
}

export function populateEditModal(data) {
  console.log("populateEditModal", data);
  const data_keys = ["id_categorie_client", "libelle_categorie_client"];
  data_keys.forEach((element) => {
    const input = document.getElementById(element + "Field");
    if (input) {
      input.value = data[element];
    }
  });
}

export function collectEditFormData(e) {
  e.preventDefault();
  const id = document.getElementById("id_categorie_clientField").value;
  const libelle = document.getElementById(
    "libelle_categorie_clientField"
  ).value;

  // Structure des données selon ce que le backend attend
  const updateData = {
    table: "myclean_categorie_client",
    fields: ["libelle_categorie_client"],
    values: [libelle],
    whereClause: "id_categorie_client = ?",
    whereParams: [id],
  };

  axios
    .put("api/categoriesClient/crudOps", updateData)
    .then((response) => {
      console.log("Mise à jour réussie:", response.data);
      const modal = document.getElementById("editCategorieClientModal");
      if (modal) {
        modal.classList.remove("show");
        modal.style.display = "none";
        document.body.classList.remove("modal-open");
        const backdrop = document.querySelector(".modal-backdrop");
        if (backdrop) {
          backdrop.remove();
        }
        window.location.reload();
      }
    })
    .catch((error) => {
      console.error(
        "Erreur lors de la mise à jour:",
        error.response?.data || error
      );
      alert(
        error.response?.data?.message ||
          "Erreur lors de la mise à jour. Veuillez réessayer."
      );
    });
}
