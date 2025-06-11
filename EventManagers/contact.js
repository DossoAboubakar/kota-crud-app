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

export function deleteContact(id) {
  if (confirm("Voulez-vous vraiment supprimer  #" + id + " des contacts?")) {
    axios
      .delete(`api/contacts/crudOps?id=${id}`)
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

export function addContact() {
  const id_annonce = document.getElementById("id_annonce1").value;
  const id_agence = document.getElementById("id_agence1").value;
  const nom = document.getElementById("nom1").value;
  const email = document.getElementById("email1").value;
  const telephone = document.getElementById("telephone1").value;
  const acheteur = document.getElementById("acheteur1").value;
  const locataire = document.getElementById("locataire1").value;
  const message = document.getElementById("message1").value;
  const etat_contact = document.getElementById("etat_contact1").value;
  const indicUser = document.getElementById("indicUser1").value;
  const votrerecherche = document.getElementById("votrerecherche1").value;
  const libvotrerecherche = document.getElementById("libvotrerecherche1").value;
  const votretype = document.getElementById("votretype1").value;
  const libvotretype = document.getElementById("libvotretype1").value;
  const surfacebienmin = document.getElementById("surfacebienmin1").value;
  const surfacebienmax = document.getElementById("surfacebienmax1").value;
  const prixmin = document.getElementById("prixmin1").value;
  const prixmax = document.getElementById("prixmax1").value;
  const tel = document.getElementById("telephone1").value;
  console.log("nom", nom);
  console.log("email", email);
  console.log("acheteur", acheteur);
  console.log("telephone", tel);
  const params = new URLSearchParams();
  params.append("id_annonce", id_annonce);
  params.append("id_agence", id_agence);
  params.append("nom", nom);
  params.append("email", email);
  params.append("telephone", telephone);
  params.append("acheteur", acheteur);
  params.append("locataire", locataire);
  params.append("message", message);
  params.append("etat_contact", etat_contact);
  params.append("indicUser", indicUser);
  params.append("votrerecherche", votrerecherche);
  params.append("libvotrerecherche", libvotrerecherche);
  params.append("votretype", votretype);
  params.append("libvotretype", libvotretype);
  params.append("surfacebienmin", surfacebienmin);
  params.append("surfacebienmax", surfacebienmax);
  params.append("prixmin", prixmin);
  params.append("prixmax", prixmax);
  params.append("tel", tel);
  axios
    .post("api/contacts/crudOps", params, {
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
    })
    .then(function (response) {
      console.log("addContact:", response);
      const alertArea = document.getElementById("alert-area");
      alertArea.innerHTML = INNER_HTML;
      setTimeout(() => {
        alertArea.innerHTML = INNER_HTML_REFRESH;
      }, 3000);
    })
    .catch(function (error) {
      console.error("Erreur lors de l'ajout:", error);
      alert("Veuillez remplir tout les champs");
    });
}

export function updateContact(formData) {
  // formData.append("_method", "PUT");
  const params = new URLSearchParams();
  formData.forEach((value, key) => {
    params.append(key, value);
  });
  axios
    .put("api/contacts/crudOps", params, {
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
      alert("Veuillez remplir tout les champs");
    });
}

export function getContactById(id) {
  axios
    .get(`api/contacts/crudOps`, {
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
  document.getElementById("id_contacts").value = data.id_contacts;
  document.getElementById("nom2").value = data.nom;
  document.getElementById("email2").value = data.email;
  document.getElementById("telephone2").value = data.telephone;
  document.getElementById("acheteur2").value = data.acheteur;
  document.getElementById("locataire2").value = data.locataire;
  document.getElementById("message2").value = data.message;
  document.getElementById("etat_contact2").value = data.etat_contact;
  document.getElementById("indicUser2").value = data.indicUser;
  document.getElementById("votrerecherche2").value = data.votrerecherche;
  document.getElementById("libvotrerecherche2").value = data.libvotrerecherche;
  document.getElementById("votretype2").value = data.votretype;
  document.getElementById("libvotretype2").value = data.libvotretype;
  document.getElementById("surfacebienmin2").value = data.surfacebienmin;
  document.getElementById("surfacebienmax2").value = data.surfacebienmax;
  document.getElementById("prixmin2").value = data.prixmin;
  document.getElementById("prixmax2").value = data.prixmax;
  document.getElementById("id_annonce2").value = data.id_annonce;
  document.getElementById("id_agence2").value = data.id_agence;
}

export function collectEditFormData(e) {
  e.preventDefault();
  const id_annonce = document.getElementById("id_annonce2").value;
  const id_agence = document.getElementById("id_agence2").value;
  const id_contact = document.getElementById("id_contacts").value;
  const nom = document.getElementById("nom2").value;
  const email = document.getElementById("email2").value;
  const telephone = document.getElementById("telephone2").value;
  const acheteur = document.getElementById("acheteur2").value;
  const locataire = document.getElementById("locataire2").value;
  const message = document.getElementById("message2").value;
  const etat_contact = document.getElementById("etat_contact2").value;
  const indicUser = document.getElementById("indicUser2").value;
  const votrerecherche = document.getElementById("votrerecherche2").value;
  const libvotrerecherche = document.getElementById("libvotrerecherche2").value;
  const votretype = document.getElementById("votretype2").value;
  const libvotretype = document.getElementById("libvotretype2").value;
  const surfacebienmin = document.getElementById("surfacebienmin2").value;
  const surfacebienmax = document.getElementById("surfacebienmax2").value;
  const prixmin = document.getElementById("prixmin2").value;
  const prixmax = document.getElementById("prixmax2").value;
  const formData = new FormData();
  formData.append("id_contacts", id_contact);
  formData.append("id_annonce", id_annonce);
  formData.append("id_agence", id_agence);
  formData.append("nom", nom);
  formData.append("email", email);
  formData.append("telephone", telephone);
  formData.append("acheteur", acheteur);
  formData.append("locataire", locataire);
  formData.append("message", message);
  formData.append("etat_contact", etat_contact);
  formData.append("indicUser", indicUser);
  formData.append("votrerecherche", votrerecherche);
  formData.append("libvotrerecherche", libvotrerecherche);
  formData.append("votretype", votretype);
  formData.append("libvotretype", libvotretype);
  formData.append("surfacebienmin", surfacebienmin);
  formData.append("surfacebienmax", surfacebienmax);
  formData.append("prixmin", prixmin);
  formData.append("prixmax", prixmax);
  updateContact(formData);
}
