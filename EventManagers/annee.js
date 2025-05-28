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

export function deleteAnnee(id) {
  if (confirm("Voulez-vous vraiment supprimer  #" + id + " des années?")) {
    axios
      .delete(`api/annees/crudOps?id=${id}`)
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

export function addAnnee() {
  const libelle = document.getElementById("libelle_annee").value;
  const formData = new FormData();
  formData.append("libelle", libelle);
  axios
    .post("api/annees/crudOps", formData)
    .then(function (response) {
      console.log("addAnnee:", response);
      const alertArea = document.getElementById("alert-area");
      alertArea.innerHTML = INNER_HTML;

      document.getElementById("libelle_annee").value = "";
    })
    .catch(function (error) {
      console.error("Erreur lors de l'ajout:", error);
    });
}

export function updateAnnee(formData) {
  const params = new URLSearchParams();
  formData.forEach((value, key) => {
    params.append(key, value);
  });

  axios
    .put("api/annees/crudOps", params, {
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

export function getAnneeById(id) {
  axios
    .get(`api/annees/crudOps`, {
      params: {
        id: id,
      },
    })
    .then((response) => {
      const data = response.data.data[0];
      populateEditFormFields(data)
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
    });
}


export function populateEditFormFields(data) {
  console.log(data);
  const data_keys = ["id_annee", "libelle_annee"];
  data_keys.forEach((element) => {
    const input = document.getElementById(element + "Field");
    if (input) {
      input.value = data[element];
    }
  });}
  


export function collectEditFormData(e) {
  e.preventDefault();
  const id = document.getElementById("id_anneeField").value;
  const libelle = document.getElementById("libelle_anneeField").value;
  const formData = new FormData();
  formData.append("id", id);
  formData.append("libelle", libelle);
  updateAnnee(formData);
}
