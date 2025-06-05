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

export function deleteVendeur(id) {
  console.log("Tentative de suppression...");
  if (confirm("Voulez-vous vraiment supprimer  #" + id + " des vendeurs?")) {
    axios
      .delete(`api/vendeurs/crudOps?id=${id}`)
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

export function addVendeur() {
  const image = document.getElementById("image1").files[0];
  const id_pro = document.getElementById("id_pro1").value;
  const type_vendeur = document.getElementById("type_vendeur1").value;
  const mdp_vendeur = document.getElementById("mdp_vendeur1").value;
  const description_vendeur = document.getElementById(
    "description_vendeur1"
  ).value;
  const nomsociete = document.getElementById("nomsociete1").value;
  const statut = document.getElementById("statut1").value;
  const immatriculation = document.getElementById("immatriculation1").value;
  const adresse = document.getElementById("adresse1").value;
  const legerant = document.getElementById("legerant1").value;
  const lenom = document.getElementById("lenom1").value;
  const leprenom = document.getElementById("leprenom1").value;
  const indicatif = document.getElementById("indicatif1").value;
  const telephone = document.getElementById("telephone1").value;
  const email = document.getElementById("email1").value;
  const etat = document.getElementById("etat1").value;
  const horaires = document.getElementById("horaires1").value;
  const equipes = document.getElementById("equipes1").value;
  const uid = document.getElementById("uid1").value;
  const nb_unite = document.getElementById("nb_unite1").value;
  const formData = new FormData();
  formData.append("image", image);
  formData.append("id_pro", id_pro);
  formData.append("type_vendeur", type_vendeur);
  formData.append("mdp_vendeur", mdp_vendeur);
  formData.append("description_vendeur", description_vendeur);
  formData.append("nomsociete", nomsociete);
  formData.append("statut", statut);
  formData.append("immatriculation", immatriculation);
  formData.append("adresse", adresse);
  formData.append("legerant", legerant);
  formData.append("lenom", lenom);
  formData.append("leprenom", leprenom);
  formData.append("indicatif", indicatif);
  formData.append("telephone", telephone);
  formData.append("email", email);
  formData.append("etat", etat);
  formData.append("horaires", horaires);
  formData.append("equipes", equipes);
  formData.append("uid", uid);
  formData.append("nb_unite", nb_unite);
  axios
    .post("api/vendeurs/crudOps", formData)
    .then(function (response) {
      console.log("addVendeur:", response);
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
  formData.append("image", document.getElementById("image2").files[0]);
  formData.append("id_pro", document.getElementById("id_pro2").value);
  formData.append(
    "type_vendeur",
    document.getElementById("type_vendeur2").value
  );
  formData.append("mdp_vendeur", document.getElementById("mdp_vendeur2").value);
  formData.append(
    "description_vendeur",
    document.getElementById("description_vendeur2").value
  );
  formData.append("nomsociete", document.getElementById("nomsociete2").value);
  formData.append("statut", document.getElementById("statut2").value);
  formData.append(
    "immatriculation",
    document.getElementById("immatriculation2").value
  );
  formData.append("adresse", document.getElementById("adresse2").value);
  formData.append("legerant", document.getElementById("legerant2").value);
  formData.append("lenom", document.getElementById("lenom2").value);
  formData.append("leprenom", document.getElementById("leprenom2").value);
  formData.append("indicatif", document.getElementById("indicatif2").value);
  formData.append("telephone", document.getElementById("telephone2").value);
  formData.append("email", document.getElementById("email2").value);
  formData.append("etat", document.getElementById("etat2").value);
  formData.append("horaires", document.getElementById("horaires2").value);
  formData.append("equipes", document.getElementById("equipes2").value);
  formData.append("uid", document.getElementById("uid2").value);
  formData.append("nb_unite", document.getElementById("nb_unite2").value);
  addVendeur(formData);
}
export function collectEditFormData(e) {
  e.preventDefault();
  const formData = new FormData();
  formData.append("image", document.getElementById("image2").files[0]);
  formData.append("id_vendeur", document.getElementById("id_vendeur").value);
  formData.append("adresse", document.getElementById("adresse2").value);
  formData.append("id_pro", document.getElementById("id_pro2").value);
  formData.append("type_vendeur", document.getElementById("type_vendeur2").value);
  formData.append("mdp_vendeur", document.getElementById("mdp_vendeur2").value);
  formData.append("description_vendeur", document.getElementById("description_vendeur2").value);
  formData.append("nomsociete", document.getElementById("nomsociete2").value);
  formData.append("statut", document.getElementById("statut2").value);
  formData.append("immatriculation", document.getElementById("immatriculation2").value);
  formData.append("legerant", document.getElementById("legerant2").value);
  formData.append("lenom", document.getElementById("lenom2").value);
  formData.append("leprenom", document.getElementById("leprenom2").value);
  formData.append("indicatif", document.getElementById("indicatif2").value);
  formData.append("telephone", document.getElementById("telephone2").value);
  formData.append("email", document.getElementById("email2").value);
  formData.append("etat", document.getElementById("etat2").value);
  formData.append("horaires", document.getElementById("horaires2").value);
  formData.append("equipes", document.getElementById("equipes2").value);
  formData.append("uid", document.getElementById("uid2").value);
  formData.append("nb_unite", document.getElementById("nb_unite2").value);
  updateVendeur(formData);
}
export function updateVendeur(formData) {
  formData.append("_method", "PUT");
  axios
    .post("api/vendeurs/crudOps", formData, {
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
export function getVendeurById(id) {
  axios
    .get(`api/vendeurs/crudOps?id=${id}`)
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
  document.getElementById("id_vendeur").value = data.id_vendeur;
  document.getElementById("id_pro2").value = data.id_pro;
  document.getElementById("type_vendeur2").value = data.type_vendeur;
  document.getElementById("mdp_vendeur2").value = data.mdp_vendeur;
  document.getElementById("description_vendeur2").value =
    data.description_vendeur;
  document.getElementById("nomsociete2").value = data.nomsociete1;
  document.getElementById("statut2").value = data.statut1;
  document.getElementById("immatriculation2").value = data.immatriculation1;
  document.getElementById("legerant2").value = data.legerant1;
  document.getElementById("lenom2").value = data.lenom1;
  document.getElementById("leprenom2").value = data.leprenom1;
  document.getElementById("indicatif2").value = data.indicatif;
  document.getElementById("telephone2").value = data.letelephone1;
  document.getElementById("email2").value = data.lemail1;
  document.getElementById("etat2").value = data.etat_vendeur;
  document.getElementById("horaires2").value = data.horaires;
  document.getElementById("equipes2").value = data.equipes;
  document.getElementById("uid2").value = data.uid1;
  document.getElementById("nb_unite2").value = data.nb_unite;
}
