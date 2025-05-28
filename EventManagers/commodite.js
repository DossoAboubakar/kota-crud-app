export function deleteCommodite(id) {
    console.log("Tentative de suppression...");
    if (confirm("Voulez-vous vraiment supprimer  #" + id + " des commodités?")) {
      axios
        .delete(`api/commodites/crudOps?id=${id}`)
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
  