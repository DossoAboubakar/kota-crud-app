const INNER_HTML = `<div style="display:flex ;">
                        
                        <div class="alert bg-dark text-white py-1 px-2 mb-0" style="font-size: 0.9rem; margin-right: 10px;">
                          Veuillez rafraîchir pour voir les nouvelles données
                        </div>
                        <button id="btn-refresh" class="btn btn-sm btn-warning btn-rounded py-0 px-2" style="font-size: 0.8rem;">
                        <i class="bi bi-arrow-repeat me-1"></i> Rafraîchir
                        </button>

                        <div class="alert alert-success py-1 px-2 mb-0" style="font-size: 0.9rem;">
                        ✅ Ajout effectué avec succès.
                        </div>
                    </div>`;

export function deleteFavoris(id) {
  if (confirm("Voulez-vous vraiment supprimer  #" + id + " des favoris?")) {
    axios
      .delete(`api/favoris/crudOps?id=${id}`)
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

export function addFavoris() {
  const id_client = document.getElementById("client_of_favoris").value;
  const id_annonce = document.getElementById("annonce_of_favoris").value;
  const date_ajout = document.getElementById("date_ajout").value;
  console.log("id_client", id_client);
  console.log("id_annonce", id_annonce);
  console.log("date_ajout", date_ajout);
  const formData = new FormData();
  formData.append("id_client", id_client);
  formData.append("id_annonce", id_annonce);
  formData.append("date_ajout", date_ajout);
  axios
    .post("api/favoris/crudOps", formData)
    .then(function (response) {
      console.log("addCategorie:", response);
      const alertArea = document.getElementById("alert-area");
      alertArea.innerHTML = INNER_HTML;
    })
    .catch(function (error) {
      console.error("Erreur lors de l'ajout:", error);
    });
}

export function updateFavoris(formData) {
  // formData.append("_method", "PUT");
  const params = new URLSearchParams();
  formData.forEach((value, key) => {
    params.append(key, value);
  });
  axios
    .put("api/favoris/crudOps", params, {
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

export function getFavorisById(id) {
  axios
    .get(`api/favoris/crudOps`, {
      params: {
        id: id,
      },
    })
    .then((response) => {
      const data = response.data.data[0];
      console.log("data: recuperer", data);
      populateEditFormFields(data);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
    });
}

export function populateEditFormFields(data) {
  console.log("populateEditFormFields", data);
  const data_keys = ["id_favoris", "id_client", "id_annonce", "date_ajouter"];
  data_keys.forEach((element) => {
    const input = document.getElementById(element);
    if (input) {
      input.value = data[element];
    }
  });
}

export function collectEditFormData(e) {
  e.preventDefault();
  const id = document.getElementById("id_favoris").value;
  const id_client = document.getElementById("id_client").value;
  const id_annonce = document.getElementById("id_annonce").value;
  const date_ajout = document.getElementById("date_ajouter").value;
  const formData = new FormData();
  updateFavoris(formData);
}
