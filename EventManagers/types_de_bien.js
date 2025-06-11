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

export function deleteTypeBienDetail(id) {
  console.log("Tentative de suppression...");
  if (
    confirm("Voulez-vous vraiment supprimer  #" + id + " des transactions?")
  ) {
    axios
      .delete(`api/typesBienDetails/crudOps?id=${id}`)
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

export function addTypeBienDetail() {
  const libelle = document.getElementById("libelle_typebien_detail").value;
  const image = document.getElementById("image_typebien_detail").files[0];
  const formData = new FormData();
  formData.append("libelle", libelle);
  formData.append("image", image);
  axios
    .post("api/typesBienDetails/crudOps", formData)
    .then(function (response) {
      console.log("addTypeBienDetail:", response);
      const alertArea = document.getElementById("alert-area");
      alertArea.innerHTML = INNER_HTML;
    })
    .catch(function (error) {
      console.error("Erreur lors de l'ajout:", error);
      alert("Veuillez remplir correctement tout les champs");
    });
}

export function collectEditFormData(e) {
  e.preventDefault();
  const formData = new FormData();
  formData.append("id", document.getElementById("id_typebien_detail").value);
  formData.append(
    "libelle",
    document.getElementById("libelle_typebien_detailEdit").value
  );
  formData.append(
    "image",
    document.getElementById("image_typebien_detailEdit").files[0]
  );
  updateTypeBienDetail(formData);
}
export function updateTypeBienDetail(formData) {
  formData.append("_method", "PUT");
  axios
    .post("api/typesBienDetails/crudOps", formData, {
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
      alert("Veuillez remplir correctement tout les champs");
    });
}
export function getTypeBienDetailById(id) {
  axios
    .get(`api/typesBienDetails/crudOps?id=${id}`)
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
  document.getElementById("id_typebien_detail").value = data.id_typebien_detail;
  document.getElementById("libelle_typebien_detailEdit").value =
    data.libelle_typebien_detail;
}
