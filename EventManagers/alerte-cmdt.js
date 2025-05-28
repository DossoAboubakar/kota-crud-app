export function deleteAlerteCmdt(id) {
    console.log("Tentative de suppression...");
  
    if (confirm("Voulez-vous vraiment supprimer l'element avec l'id #" + id + " ?")) {
      axios
        .delete(`api/alertesCmdts/crudOps/?id=${id}`)
        .then(function (response) {
          console.log(response)
          // Supprimer la ligne du tableau qui contient l'élément avec cet ID
          const row = document.querySelector(`tr[data-id="${id}"]`);
          if (row) {
            row.remove();
          }
          // Afficher un toast/alerte
          // const alertContainer = document.getElementById("alert-container");
          // alertContainer.innerHTML = `
          //   <div class="alert alert-success alert-dismissible fade show" role="alert">
          //     Abonnement supprimé avec succès !
          //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          //   </div>
          // `;
  
          // Fermer l'alerte automatiquement après 3 secondes
          setTimeout(() => {
            const alert = document.querySelector(".alert");
            if (alert) {
              alert.classList.remove("show");
              alert.classList.add("fade");
              alert.remove();
            }
          }, 3000);
        })
        .catch(function (error) {
          console.error("Erreur lors de la suppression:", error);
        });
    }
  }
  