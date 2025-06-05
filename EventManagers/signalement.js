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

export function deleteSignalement(id) {
  console.log("Tentative de suppression...");
  if (
    confirm("Voulez-vous vraiment supprimer  #" + id + " des signalements?")
  ) {
    axios
      .delete(`api/signalements/crudOps?id=${id}`)
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

export function addSignalement() {
  const id_annonce = document.getElementById("id_annonce1").value;
  const nom = document.getElementById("nom1").value;
  const email = document.getElementById("email1").value;
  const telephone = document.getElementById("telephone1").value;
  const message = document.getElementById("message1").value;
  const motif = document.getElementById("motif1").value;
  const etat_contact = document.getElementById("etat_contact1").value;
  const formData = new FormData();
  formData.append("id_annonce", id_annonce);
  formData.append("nom", nom);
  formData.append("email", email);
  formData.append("telephone", telephone);
  formData.append("message", message);
  formData.append("motif", motif);
  formData.append("etat_contact", etat_contact);
  axios
    .post("api/signalements/crudOps", formData)
    .then(function (response) {
      console.log("addSignalement:", response);
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
  formData.append("id_annonce", document.getElementById("id_annonce2").value);
  formData.append("nom", document.getElementById("nom2").value);
  formData.append("email", document.getElementById("email2").value);
  formData.append("telephone", document.getElementById("telephone2").value);
  formData.append("message", document.getElementById("message2").value);
  formData.append("motif", document.getElementById("motif2").value);
  formData.append(
    "etat_contact",
    document.getElementById("etat_contact2").value
  );
  addSignalement(formData);
}
export function collectEditFormData(e) {
  e.preventDefault();
  const formData = new FormData();
  formData.append("id", document.getElementById("id_signalement").value);
  formData.append("id_annonce", document.getElementById("id_annonce2").value);
  formData.append("nom", document.getElementById("nom2").value);
  formData.append("email", document.getElementById("email2").value);
  formData.append("telephone", document.getElementById("telephone2").value);
  formData.append("message", document.getElementById("message2").value);
  formData.append("motif", document.getElementById("motif2").value);
  formData.append(
    "etat_contact",
    document.getElementById("etat_contact2").value
  );
  updateSignalement(formData);
}
export function updateSignalement(formData) {
  formData.append("_method", "PUT");
  axios
    .post("api/signalements/crudOps", formData, {
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
export function getSignalementById(id) {
  axios
    .get(`api/signalements/crudOps?id=${id}`)
    .then(function (response) {
      console.log(response);
      const row = response.data[0];
      populateEditFormFields(row);
    })
    .catch(function (error) {
      console.error("Erreur lors de la récupération:", error);
    });
}

export function populateEditFormFields(data) {
  console.log("populateEditFormFields", data);
  document.getElementById("id_signalement").value = data.id_signalement;
  document.getElementById("id_annonce2").value = data.id_annonce;
  document.getElementById("nom2").value = data.nom;
  document.getElementById("email2").value = data.email;
  document.getElementById("telephone2").value = data.telephone;
  document.getElementById("message2").value = data.message;
  document.getElementById("motif2").value = data.motif;
  document.getElementById("etat_contact2").value = data.etat_contact;
}
