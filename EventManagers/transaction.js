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

export function deleteTransaction(id) {
  console.log("Tentative de suppression...");
  if (
    confirm("Voulez-vous vraiment supprimer  #" + id + " des transactions?")
  ) {
    axios
      .delete(`api/transactions/crudOps?id=${id}`)
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

export function addTransaction() {
  const titre = document.getElementById("titre_transaction").value;
  const formData = new FormData();
  formData.append("titre", titre);
  axios
    .post("api/transactions/crudOps", formData)
    .then(function (response) {
      console.log("addTransaction:", response);
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
  formData.append("titre", document.getElementById("titre_transaction").value);
  addTransaction(formData);
}
export function collectEditFormData(e) {
  e.preventDefault();
  const formData = new FormData();
  formData.append("id", document.getElementById("id_transaction").value);
  formData.append(
    "titre",
    document.getElementById("titre_transactionEdit").value
  );
  updateTransaction(formData);
}
export function updateTransaction(formData) {
  const params = new URLSearchParams();
  formData.forEach((value, key) => {
    params.append(key, value);
  });

  axios
    .put("api/transactions/crudOps", params, {
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
export function getTransactionById(id) {
  axios
    .get(`api/transactions/crudOps?id=${id}`)
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
  document.getElementById("id_transaction").value = data.id_transaction;
  document.getElementById("titre_transactionEdit").value =
    data.titre_transaction;
}
