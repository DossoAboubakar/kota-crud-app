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
const INNER_HTML_REFRESH = `<div style="display:flex ;">
                        <div class="alert bg-dark text-white py-1 px-2 mb-0" style="font-size: 0.9rem; margin-right: 10px;">
                          Veuillez rafraîchir pour voir les nouvelles données
                        </div>
                        <button id="btn-refresh" class="btn btn-sm btn-warning btn-rounded py-0 px-2" style="font-size: 0.8rem;">
                        <i class="bi bi-arrow-repeat me-1"></i> Rafraîchir
                        </button>
                    </div>`;

export function deleteCommune(id) {
  if (confirm("Voulez-vous vraiment supprimer  #" + id + " des communes?")) {
    axios
      .delete(`api/communes/crudOps?id=${id}`)
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

export function addCommune() {
  const libelle_commune = document.getElementById("libelle_commune1").value;
  const id_ville = document.getElementById("id_ville1").value;
  console.log("libelle_commune", libelle_commune);
  console.log("id_ville", id_ville);
  const formData = new FormData();
  formData.append("libelle_commune", libelle_commune);
  formData.append("id_ville", id_ville);
  axios
    .post("api/communes/crudOps", formData)
    .then(function (response) {
      console.log("addCommune:", response);
      const alertArea = document.getElementById("alert-area");
      alertArea.innerHTML = INNER_HTML;
      setTimeout(() => {
        alertArea.innerHTML = INNER_HTML_REFRESH;
      }, 3000);
    })
    .catch(function (error) {
      console.error("Erreur lors de l'ajout:", error);
    });
}

export function updateCommune(formData) {
  const params = new URLSearchParams();
  formData.forEach((value, key) => {
    params.append(key, value);
  });
  axios
    .put("api/communes/crudOps", params, {
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

export function getCommuneById(id) {
  axios
    .get(`api/communes/crudOps`, {
      params: {
        id: id,
      },
    })
    .then((response) => {
      const data = response.data[0];
      console.log("data: recuperer", data);
      populateEditFormFields(data);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
    });
}

export function populateEditFormFields(data) {
  console.log("populateEditFormFields", data);
  document.getElementById("id_commune").value = data.id_commune;
  document.getElementById("libelle_commune2").value = data.libelle_commune;
  document.getElementById("id_ville2").value = data.id_ville;
}

export function collectEditFormData(e) {
  e.preventDefault();
  const libelle_commune = document.getElementById("libelle_commune2").value;
  const id_ville = document.getElementById("id_ville2").value;
  const formData = new FormData();
  formData.append("id_commune", document.getElementById("id_commune").value);
  formData.append("libelle_commune", libelle_commune);
  formData.append("id_ville", id_ville);
  updateCommune(formData);
}
