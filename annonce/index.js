console.log("Le fichier index.js est bien chargé !");

window.populateEditModal = function (id) {
  console.log(id);
  getItemById(id);
};

function getItemById(id) {
  const formData = new FormData();
  formData.append("id", id);

  axios
    .post("annonce/crud.php", formData)
    .then((response) => {
      console.log(response);
      populateEditFormFields(response.data.data[0]);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
    });
}

function populateEditFormFields(data) {
  console.log("dataDansPopulateEditFormFields", data);
  const data_keys = [
    "id",
    "uid",
    "libelle",
    "image",
    "description",
    "titre_transaction",
    "prix",
    "categorie",
    "vendeur",
    "vendeur_type",
    "date_crea",
    "etat",
    "token",
    "surfacebien",
    "nbpiece",
    "nbChambre",
    "nbSalleDeBain",
    "nbToilette",
    "meuble",
    "nbplace",
    "isexclu",
    "terasse",
    "balcon",
    "neuf",
    "garage",
    "cave",
    "handicape",
    "montanthonoraire",
    "loyersanscharges",
    "charges",
    "montanttotal",
    "prixgarantie",
    "moisgarantie",
    "descrGarantie",
    "descrBien",
    "adresseBien",
    "longitude",
    "latitude",
    "pseudo",
    "numero",
    "zone",
    "commune",
    "ville",
    "ispro",
    "typebien",
    "surfaceTerrain",
    "anneeDuBien",
    "titreVideo",
    "tailleVideo",
    "formatVideo",
    "lienVideo",
  ];

  data_keys.forEach((element) => {
    const input = document.getElementById(element + "2");
    if (input) {
      input.value = data[element];
    }
  });
}

var map1 = L.map("map1")?.setView([5.347, -4.027], 13); // Abidjan

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution: "© OpenStreetMap",
}).addTo(map1);

var marker1;

map1.on("click", function (e) {
  const lat = e.latlng.lat.toFixed(6);
  const lon = e.latlng.lng.toFixed(6);

  document.getElementById("latitude1").value = lat;
  document.getElementById("longitude1").value = lon;

  if (marker1) {
    marker1.setLatLng(e.latlng);
  } else {
    marker1 = L.marker(e.latlng).addTo(map1);
  }
});

var mapEdit = L.map("mapEdit")?.setView([5.347, -4.027], 13); // Abidjan

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution: "© OpenStreetMap",
}).addTo(mapEdit);

var markerEdit;

mapEdit.on("click", function (e) {
  const lat = e.latlng.lat.toFixed(6);
  const lon = e.latlng.lng.toFixed(6);

  document.getElementById("latitude2").value = lat;
  document.getElementById("longitude2").value = lon;

  if (markerEdit) {
    markerEdit.setLatLng(e.latlng);
  } else {
    markerEdit = L.marker(e.latlng).addTo(mapEdit);
  }
});
