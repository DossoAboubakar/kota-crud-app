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

export function deletePays(id) {
  console.log("Tentative de suppression...");
  if (confirm("Voulez-vous vraiment supprimer  #" + id + " des dossiers?")) {
    axios
      .delete(`api/pays/crudOps?id=${id}`)
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

export function addPays() {
  const code = document.getElementById("code").value;
  const alpha2 = document.getElementById("alpha2").value;
  const alpha3 = document.getElementById("alpha3").value;
  const nom_en_gb = document.getElementById("nom_en_gb").value;
  const nom_fr_fr = document.getElementById("nom_fr_fr").value;
  const formData = new FormData();
  formData.append("code", code);
  formData.append("alpha2", alpha2);
  formData.append("alpha3", alpha3);
  formData.append("nom_en_gb", nom_en_gb);
  formData.append("nom_fr_fr", nom_fr_fr);
  axios
    .post("api/pays/crudOps", formData)
    .then(function (response) {
      console.log("addPays:", response);
      const alertArea = document.getElementById("alert-area");
      alertArea.innerHTML = INNER_HTML;
    })
    .catch(function (error) {
      console.error("Erreur lors de l'ajout:", error);
    });
}
export function collectAddFormData(e) {
  e.preventDefault();
  const formData = new FormData();
  formData.append("code", document.getElementById("code").value);
  formData.append("alpha2", document.getElementById("alpha2").value);
  formData.append("alpha3", document.getElementById("alpha3").value);
  formData.append("nom_en_gb", document.getElementById("nom_en_gb").value);
  formData.append("nom_en_fr", document.getElementById("nom_en_fr").value);
  addPays(formData);
}
export function collectEditFormData(e) {
  e.preventDefault();
  const formData = new FormData();
  formData.append("id", document.getElementById("id_pays").value);
  formData.append("code", document.getElementById("codeEdit").value);
  formData.append("alpha2", document.getElementById("alpha2Edit").value);
  formData.append("alpha3", document.getElementById("alpha3Edit").value);
  formData.append("nom_en_gb", document.getElementById("nom_en_gbEdit").value);
  formData.append("nom_fr_fr", document.getElementById("nom_fr_frEdit").value);
  console.log("formData", document.getElementById("codeEdit").value);
  console.log("formData", document.getElementById("alpha2Edit").value);
  console.log("formData", document.getElementById("alpha3Edit").value);
  console.log("formData", document.getElementById("nom_en_gbEdit").value);
  console.log("formData", document.getElementById("nom_fr_frEdit").value);
  updatePays(formData);
}
export function updatePays(formData) {
  formData.append("_method", "PUT");
  axios
    .post("api/pays/crudOps", formData, {
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
export function getPaysById(id) {
  axios
    .get(`api/pays/crudOps?id=${id}`)
    .then(function (response) {
      console.log(response);
      const row = response.data.data[0];
      populateEditFormFields(row);
    })
    .catch(function (error) {
      console.error("Erreur lors de la récupération:", error);
    });
}

export function populateEditFormFields(data) {
  console.log("populateEditFormFields", data);
  document.getElementById("id_pays").value = data.id;
  document.getElementById("codeEdit").value = data.code;
  document.getElementById("alpha2Edit").value = data.alpha2;
  document.getElementById("alpha3Edit").value = data.alpha3;
  document.getElementById("nom_en_gbEdit").value = data.nom_en_gb;
  document.getElementById("nom_fr_frEdit").value = data.nom_fr_fr;
}
