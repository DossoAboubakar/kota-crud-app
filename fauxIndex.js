import { deleteAbonnement } from './EventManagers/abonnement.js';

var $actionButtons = `<button class="btn btn-sm btn-outline-primary me-1" title="Éditer">
          <i class="bi bi-pencil-square"></i>
        </button>
        <button class="btn btn-sm btn-outline-danger" title="Supprimer" onclick="$fn_delete()">
  <i class="bi bi-trash"></i>
</button>`;
var _base = "./";


$(document).ready(function () {
  $("#menu-abonnement").on("click", function () {
    window.location.href = "/Abonnements";
  });
  $("#menu-actualités").on("click", function () {
    window.location.href = "/Actualites";
  });
  $("#menu-alertes").on("click", function () {
    window.location.href = "/Alertes";
  });

  
  $("#data-table").DataTable({
    responsive: true,
    scrollX: 1065,
    scrollY: 500


    /* ajax: _base + "api/getAbonnements/",
    / columns: [
      { data: "id" },
      { data: "nom_client" },
      { data: "prenom_client" },
      { data: "numero_client" },
      { data: "abn_1" },
      { data: "abn_2" },
      { data: "abn_3" },
      { data: "abn_4" },
      { data: "etat_abonnement" },
      {
        data: null,
        render: function (data, type, row) {
          return $actionButtons;
        },
      },
    ],*/
  });
});


const deleteButton= document.querySelectorAll('.btn-deleteActu');
  
deleteButton.forEach(button => {
  button.addEventListener('click', function () {
   console.log("ok  ca marche");
    });
});

const deleteButtons = document.querySelectorAll('.btn-deleteAbnmt');
  
    deleteButtons.forEach(button => {
      button.addEventListener('click', function () {
        const id = this.dataset.id;
        deleteAbonnement(id);
        });
    });
  
   




  
  
  