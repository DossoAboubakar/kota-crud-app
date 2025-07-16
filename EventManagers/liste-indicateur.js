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

export function deleteIndicateur(id) {
  console.log("Tentative de suppression...");
  if (confirm("Voulez-vous vraiment supprimer  #" + id + " des dossiers?")) {
    axios
      .delete(`api/listeIndicateurs/crudOps?id=${id}`)
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

export function addIndicateur() {
  const indicatif = document.getElementById("indicatif").value;
  const pays = document.getElementById("pays").value;
  const flag = document.getElementById("flag").files[0];
  const formData = new FormData();
  formData.append("indicatif", indicatif);
  formData.append("pays", pays);
  formData.append("flag", flag);
  axios
    .post("api/listeIndicateurs/crudOps", formData)
    .then(function (response) {
      console.log("addIndicateur:", response);
      const alertArea = document.getElementById("alert-area");
      alertArea.innerHTML = INNER_HTML;
    })
    .catch(function (error) {
      console.error("Erreur lors de l'ajout:", error);
      alert("Veuillez remplir tout les champs");
    });
}
export function collectAddFormData(e) {
  e.preventDefault();
  const formData = new FormData();
  formData.append("indicatif", document.getElementById("indicatif").value);
  formData.append("pays", document.getElementById("pays").value);
  formData.append("flag", document.getElementById("flag").files[0]);
  addIndicateur(formData);
}
export function collectEditFormData(e) {
  e.preventDefault();
  const formData = new FormData();
  formData.append("id", document.getElementById("id_indic").value);
  formData.append("indicatif", document.getElementById("indicatif2").value);
  formData.append("pays", document.getElementById("pays2").value);
  formData.append("flag", document.getElementById("flag2").files[0]);

  const fileInput = document.getElementById("flagEdit");
  console.log("File input element:", fileInput); 
  if (fileInput) {
    console.log("Files:", fileInput.files); 
    console.log("First file:", fileInput.files[0]); 
  }
  updateIndicateur(formData);
}
export function updateIndicateur(formData) {
  formData.append("_method", "PUT");
  axios
    .post("api/listeIndicateurs/crudOps", formData, {
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
      alert("Veuillez remplir tout les champs")
    });
}
export function getIndicateurById(id) {
  axios
    .get(`api/listeIndicateurs/crudOps?id=${id}`)
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
  document.getElementById("id_indic").value = data.id_indic;
  document.getElementById("indicatif2").value = data.libelle;
  document.getElementById("pays2").value = data.pays;
}
