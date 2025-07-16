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

export function deleteUser(id) {
  if (confirm("Voulez-vous vraiment supprimer  #" + id + " des contacts?")) {
    axios
      .delete(`api/users/crudOps?id=${id}`)
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

export function addUser() {
  const nom = document.getElementById("nom_user1").value;
  const prenom = document.getElementById("prenom_user1").value;
  const tel = document.getElementById("tel_user1").value;
  const pays = document.getElementById("pays_user1").value;
  const ville = document.getElementById("communeUser1").value;
  const email = document.getElementById("email_user1").value;
  const token = document.getElementById("token1").value;
  const mdp = document.getElementById("mdp_user1").value;
  const etat = document.getElementById("etat_user1").value;
  const indicatif = document.getElementById("indicatif1").value;
  const adresseUser = document.getElementById("adresseUser1").value;
  console.log("nom", nom);
  console.log("email", email);
  console.log("telephone", tel);
  const params = new URLSearchParams();
  params.append("nom", nom);
  params.append("prenom", prenom);
  params.append("tel", tel);
  params.append("pays", pays);
  params.append("ville", ville);
  params.append("email", email);
  params.append("token", token);
  params.append("mdp", mdp);
  params.append("etat", etat);
  params.append("indicatif", indicatif);
  params.append("adresseUser", adresseUser);
  axios
    .post("api/users/crudOps", params, {
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
    })
    .then(function (response) {
      console.log("addUser:", response);
      const alertArea = document.getElementById("alert-area");
      alertArea.innerHTML = INNER_HTML;
      setTimeout(() => {
        alertArea.innerHTML = INNER_HTML_REFRESH;
      }, 3000);
    })
    .catch(function (error) {
      console.error("Erreur lors de l'ajout:", error);
      alert("Veuillez remplir  correctement les champs");
    });
}

export function updateUser(formData) {
  const params = new URLSearchParams();
  formData.forEach((value, key) => {
    params.append(key, value);
  });
  axios
    .put("api/users/crudOps", params, {
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

export function getUserById(id) {
  axios
    .get(`api/users/crudOps`, {
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
  document.getElementById("id_user").value = data.id_client;
  document.getElementById("nom_user2").value = data.nom_client;
  document.getElementById("prenom_user2").value = data.prenom_client;
  document.getElementById("email_user2").value = data.email_client;
  document.getElementById("tel_user2").value = data.tel_client;
  document.getElementById("token2").value = data.token;
  document.getElementById("mdp_user2").value = data.mdp_client;
  document.getElementById("etat_user2").value = data.etat_client;
  document.getElementById("indicatif2").value = data.indicatif;
  document.getElementById("adresseUser2").value = data.adresseUser;
  document.getElementById("communeUser2").value = data.communeUser;
}

export function collectEditFormData(e) {
  e.preventDefault();
  const id_user = document.getElementById("id_user").value;
  const nom = document.getElementById("nom_user2").value;
  const prenom = document.getElementById("prenom_user2").value;
  const email = document.getElementById("email_user2").value;
  const tel = document.getElementById("tel_user2").value;
  const token = document.getElementById("token2").value;
  const mdp = document.getElementById("mdp_user2").value;
  const etat = document.getElementById("etat_user2").value;
  const indicatif = document.getElementById("indicatif2").value;
  const adresse = document.getElementById("adresseUser2").value;
  const commune = document.getElementById("communeUser2").value;
  const pays = document.getElementById("pays2").value;
  const formData = new FormData();
  formData.append("id", id_user);
  formData.append("nom", nom);
  formData.append("prenom", prenom);
  formData.append("indicatif", indicatif);
  formData.append("tel", tel);
  formData.append("email", email);
  formData.append("token", token);
  formData.append("mdp", mdp);
  formData.append("etat", etat);
  formData.append("commune", commune);
  formData.append("adresse", adresse);
  formData.append("pays", pays);
  updateUser(formData);
}
