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

export function deleteImageAgence(id) {
    console.log("Tentative de suppression...");
    if (confirm("Voulez-vous vraiment supprimer  #" + id + " des dossiers?")) {
      axios
        .delete(`api/image-agence/crudOps?id=${id}`)
        .then(function (response) {
          console.log(response)
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
 export function addImageAgence() {
   const id_user = document.getElementById("id_user").value;
   const id_annonce = document.getElementById("id_annonce").value;
   const image = document.getElementById("image").files[0];
   const formData = new FormData();
   formData.append("id_client", id_user);
   formData.append("id_annonce", id_annonce);
   formData.append("image", image);
   axios
     .post("api/imagesAgences/crudOps", formData)
     .then(function (response) {
       console.log("addImageAgence:", response);
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
    formData.append("id_client", document.getElementById("id_user").value);
    formData.append("id_annonce", document.getElementById("id_annonce").value);
    formData.append("image", document.getElementById("image").files[0]);
    addImageAgence(formData);
  }
  export function collectEditFormData(e) {
    e.preventDefault();
    const formData = new FormData();
    formData.append("id", document.getElementById("id_image_annonce").value);
    formData.append("id_client", document.getElementById("id_user").value);
    formData.append("id_annonce", document.getElementById("id_annonce").value);
    formData.append("image", document.getElementById("imageAgence").files[0]);
    console.log('formData', document.getElementById("imageAgence").files[0])
    updateImageAgence(formData);
  }
  export function updateImageAgence(formData) {
    formData.append("_method", "PUT");
    axios
      .post("api/imagesAgences/crudOps", formData, {
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
  export function getImageAgenceById(id) {
    axios
      .get(`api/imagesAgences/crudOps?id=${id}`)
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
    const data_keys = ["id_image_annonce", "id_user", "id_annonce"];
    data_keys.forEach((element) => {
      const input = document.getElementById(element);
      if (input) {
        input.value = data[element];
      }
    });
  }