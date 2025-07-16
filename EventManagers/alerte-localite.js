export function deleteAlerteLocalite(id) {
  console.log("Tentative de suppression...");

  if (
    confirm("Voulez-vous vraiment supprimer l'element avec l'id #" + id + " ?")
  ) {
    axios
      .delete(`api/alertesLocalites/crudOps/?id=${id}`)
      .then(function (response) {
        console.log(response);
        const row = document.querySelector(`tr[data-id="${id}"]`);
        if (row) {
          row.remove();
        }
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
