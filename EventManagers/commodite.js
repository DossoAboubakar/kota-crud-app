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

export function deleteCommodite(id) {
  if (confirm("Voulez-vous vraiment supprimer  #" + id + " des contacts?")) {
    axios
      .delete(`api/commodites/crudOps?id=${id}`)
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

export function addCommodite() {
  const titre = document.getElementById("commodites1").value;
  const type = document.getElementById("type1").value;
  const image = document.getElementById("image1").files[0];
  const activeimage = document.getElementById("activeimage1").files[0];
  const ispro = document.getElementById("ispro1").value;
  const code = document.getElementById("code1").value;
  console.log("titre", titre);
  console.log("type", type);
  console.log("image", image);
  console.log("activeimage", activeimage);
  console.log("ispro", ispro);
  console.log("code", code);
  const params = new URLSearchParams();
  params.append("titre", titre);
  params.append("type", type);
  params.append("image", image);
  params.append("activeimage", activeimage);
  params.append("ispro", ispro);
  params.append("code", code);
  axios
    .post("api/commodites/crudOps", params, {
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
      alert("veuillez remplir tout les champs")
    });
}

export function updateUser(formData) {
  formData.append("_method", "PUT");
  axios
    .post("api/commodites/crudOps", formData, {
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
      alert("veuillez remplir tout les champs");
    });
}

export function getCommoditeById(id) {
  axios
    .get(`api/commodites/crudOps`, {
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
  document.getElementById("id").value = data.id_commodites;
  document.getElementById("commodites2").value = data.libelle_commodites;
  document.getElementById("type2").value = data.id_type;
  document.getElementById("ispro2").value = data.ispro;
  document.getElementById("code2").value = data.code_commodite;
}

export function collectEditFormData(e) {
  e.preventDefault();
  const id_commodite = document.getElementById("id").value;
  const titre = document.getElementById("commodites2").value;
  const type = document.getElementById("type2").value;
  const image = document.getElementById("image2").files[0];
  const activeimage = document.getElementById("activeimage2").files[0];
  const ispro = document.getElementById("ispro2").value;
  const code = document.getElementById("code2").value;
  const formData = new FormData();
  formData.append("id", id_commodite);
  formData.append("titre", titre);
  formData.append("type", type);
  formData.append("image", image);
  formData.append("activeimage", activeimage);
  formData.append("ispro", ispro);
  formData.append("code", code);
  updateUser(formData);
}
