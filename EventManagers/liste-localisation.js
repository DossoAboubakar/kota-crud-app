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

export function deleteListeLocalisation(id) {
  console.log("Tentative de suppression...");
  if (confirm("Voulez-vous vraiment supprimer  #" + id + " des dossiers?")) {
    axios
      .delete(`api/listeLocalisations/crudOps?id=${id}`)
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

export function addListeLocalisation() {
  const id_ville = document.getElementById("id_ville1").value;
  const id_commune = document.getElementById("id_commune1").value;
  const code = document.getElementById("code1").value;
  const id_zone = document.getElementById("id_zone1").value;
  const libelle_zone = document.getElementById("zone1").value;
  const libelle_localisation = document.getElementById(
    "libelle_localisation1"
  ).value;
  const identifiant = document.getElementById("identifiant1").value;
  const latitude = document.getElementById("latitude1").value;
  const longitude = document.getElementById("longitude1").value;
  const etat = document.getElementById("etat1").value;
  const formData = new FormData();
  formData.append("id_ville", id_ville);
  formData.append("id_commune", id_commune);
  formData.append("code", code);
  formData.append("id_zone", id_zone);
  formData.append("libelle_zone", libelle_zone);
  formData.append("libelle_localisation", libelle_localisation);
  formData.append("identifiant", identifiant);
  formData.append("latitude", latitude);
  formData.append("longitude", longitude);
  formData.append("etat", etat);
  axios
    .post("api/listeLocalisations/crudOps", formData)
    .then(function (response) {
      console.log("addIndicateur:", response);
      const alertArea = document.getElementById("alert-area");
      alertArea.innerHTML = INNER_HTML;
    })
    .catch(function (error) {
      console.error("Erreur lors de l'ajout:", error);
      alert(
        "veuillez remplir tout les champs ou Verifier la coherence des données"
      );
    });
}
export function collectAddFormData(e) {
  e.preventDefault();
  const formData = new FormData();
  formData.append("id_ville", document.getElementById("id_ville2").value);
  formData.append("id_commune", document.getElementById("id_commune2").value);
  formData.append("code", document.getElementById("code2").value);
  formData.append("id_zone", document.getElementById("id_zone2").value);
  formData.append("libelle_zone", document.getElementById("zone2").value);
  formData.append(
    "libelle_localisation",
    document.getElementById("libelle_localisation2").value
  );
  formData.append("identifiant", document.getElementById("identifiant2").value);
  formData.append("latitude", document.getElementById("latitude2").value);
  formData.append("longitude", document.getElementById("longitude2").value);
  formData.append("etat", document.getElementById("etat2").value);
  addListeLocalisation(formData);
}
export function collectEditFormData(e) {
  e.preventDefault();
  const formData = new FormData();
  formData.append("id", document.getElementById("id").value);
  formData.append("id_ville", document.getElementById("id_ville2").value);
  formData.append("id_commune", document.getElementById("id_commune2").value);
  formData.append("code", document.getElementById("code2").value);
  formData.append("id_zone", document.getElementById("id_zone2").value);
  formData.append("libelle_zone", document.getElementById("zone2").value);
  formData.append(
    "libelle_localisation",
    document.getElementById("libelle_localisation2").value
  );
  formData.append("identifiant", document.getElementById("identifiant2").value);
  formData.append("latitude", document.getElementById("latitude2").value);
  formData.append("longitude", document.getElementById("longitude2").value);
  formData.append("etat", document.getElementById("etat2").value);
  updateListeLocalisation(formData);
}
export function updateListeLocalisation(formData) {
  const params = new URLSearchParams();
  formData.forEach((value, key) => {
    params.append(key, value);
  });
  axios
    .put("api/listeLocalisations/crudOps", params, {
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
export function getListeLocalisationById(id) {
  axios
    .get(`api/listeLocalisations/crudOps?id=${id}`)
    .then(function (response) {
      console.log(response);
      const row = response.data[0];
      populateEditFormFields(row);
    })
    .catch(function (error) {
      console.error("Erreur lors de la récupération:", error);
      alert(
        "veuillez remplir tout les champs ou Verifier la coherence des données"
      );
    });
}

export function populateEditFormFields(data) {
  console.log("populateEditFormFields", data);
  document.getElementById("id").value = data.id_liste;
  document.getElementById("id_ville2").value = data.id_ville;
  document.getElementById("id_commune2").value = data.id_commune;
  document.getElementById("code2").value = data.code_liste;
  document.getElementById("id_zone2").value = data.id_zone;
  document.getElementById("zone2").value = data.libelle_zone;
  document.getElementById("libelle_localisation2").value =
    data.libelle_localisation;
  document.getElementById("identifiant2").value = data.id_localisation;
  document.getElementById("latitude2").value = data.latitude;
  document.getElementById("longitude2").value = data.longitude;
  document.getElementById("etat2").value = data.etat;
}
