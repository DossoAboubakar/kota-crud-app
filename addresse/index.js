console.log("Le fichier index.js est bien chargé !");

window.populateEditModal = function (id) {
  console.log(id);
  getItemById(id);
};
/**
 * Cette fonction permet de recuperer les données d'un element selon son id
 * @param {number} id
 */
function getItemById(id) {
  const formData = new FormData();
  formData.append("id", id);

  axios
    .post("addresse/crud.php", formData)
    .then((response) => {
      console.log(response);
      populateEditFormFields(response.data.data);
    })
    .catch((error) => {
      console.error("Erreur lors de la récupération des données:", error);
    });
}

/**
 * Cette fonction permet de remplir les champs du formulaire d'edition
 * @param {Object} data
 */
function populateEditFormFields(data) {
  console.log(data);
  const data_keys = [
    "id",
    "addresse",
    "id_client",
    "type_adresse",
    "longitude",
    "latitude",
    "ville",
    "type",
    "secteur",
    "batiment",
    "numero",
    "etat",
  ];

  data_keys.forEach((element) => {
    const input = document.getElementById(element + "2");
    if (input) {
      input.value = data[element];
    }
  });
}

var map = L.map("map")?.setView([5.347, -4.027], 13); // Abidjan

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution: "© OpenStreetMap",
}).addTo(map);

var marker;

map.on("click", function (e) {
  const lat = e.latlng.lat.toFixed(6);
  const lon = e.latlng.lng.toFixed(6);

  document.getElementById("latitude").value = lat;
  document.getElementById("longitude").value = lon;

  if (marker) {
    marker.setLatLng(e.latlng);
  } else {
    marker = L.marker(e.latlng).addTo(map);
  }
});
var mapEdit = L.map("mapEdit")?.setView([5.347, -4.027], 13); // Abidjan

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution: "© OpenStreetMap",
}).addTo(mapEdit);

var marker;

mapEdit.on("click", function (e) {
  const lat = e.latlng.lat.toFixed(6);
  const lon = e.latlng.lng.toFixed(6);

  document.getElementById("latitude2").value = lat;
  document.getElementById("longitude2").value = lon;

  if (marker) {
    marker.setLatLng(e.latlng);
  } else {
    marker = L.marker(e.latlng).addTo(mapEdit);
  }
});
