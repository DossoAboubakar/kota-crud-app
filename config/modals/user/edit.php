<?php
$pays = ["Afghanistan",
"Afrique du Sud",
"Albanie",
"Algérie",
"Allemagne",
"Andorre",
"Angola",
"Antigua-et-Barbuda",
"Arabie saoudite",
"Argentine",
"Arménie",
"Australie",
"Autriche",
"Azerbaïdjan",
"Bahamas",
"Bahreïn",
"Bangladesh",
"Barbade",
"Belgique",
"Belize",
"Bénin",
"Bhoutan",
"Biélorussie",
"Birmanie (Myanmar)",
"Bolivie",
"Bosnie-Herzégovine",
"Botswana",
"Brésil",
"Brunei",
"Bulgarie",
"Burkina Faso",
"Burundi",
"Cambodge",
"Cameroun",
"Canada",
"Cap-Vert",
"Chili",
"Chine",
"Chypre",
"Colombie",
"Comores",
"Congo (Brazzaville)",
"Congo (RDC / Kinshasa)",
"Corée du Nord",
"Corée du Sud",
"Costa Rica",
"Côte d'Ivoire",
"Croatie",
"Cuba",
"Danemark",
"Djibouti",
"Dominique",
"Égypte",
"El Salvador",
"Émirats arabes unis",
"Équateur",
"Érythrée",
"Espagne",
"Estonie",
"Eswatini (ex-Swaziland)",
"États-Unis",
"Éthiopie",
"Fidji",
"Finlande",
"France",
"Gabon",
"Gambie",
"Géorgie",
"Ghana",
"Grèce",
"Grenade",
"Guatemala",
"Guinée",
"Guinée équatoriale",
"Guinée-Bissau",
"Guyana",
"Haïti",
"Honduras",
"Hongrie",
"Inde",
"Indonésie",
"Irak",
"Iran",
"Irlande",
"Islande",
"Israël",
"Italie",
"Jamaïque",
"Japon",
"Jordanie",
"Kazakhstan",
"Kenya",
"Kirghizistan",
"Kiribati",
"Koweït",
"Laos",
"Lesotho",
"Lettonie",
"Liban",
"Libéria",
"Libye",
"Liechtenstein",
"Lituanie",
"Luxembourg",
"Macédoine du Nord",
"Madagascar",
"Malaisie",
"Malawi",
"Maldives",
"Mali",
"Malte",
"Maroc",
"Îles Marshall",
"Mauritanie",
"Maurice",
"Mexique",
"Micronésie",
"Moldavie",
"Monaco",
"Mongolie",
"Monténégro",
"Mozambique",
"Namibie",
"Nauru",
"Népal",
"Nicaragua",
"Niger",
"Nigéria",
"Norvège",
"Nouvelle-Zélande",
"Oman",
"Ouganda",
"Ouzbékistan",
"Pakistan",
"Palaos",
"Panama",
"Papouasie-Nouvelle-Guinée",
"Paraguay",
"Pays-Bas",
"Pérou",
"Philippines",
"Pologne",
"Portugal",
"Qatar",
"République centrafricaine",
"République tchèque",
"Roumanie",
"Royaume-Uni",
"Russie",
"Rwanda",
"Saint-Christophe-et-Niévès",
"Sainte-Lucie",
"Saint-Marin",
"Saint-Vincent-et-les-Grenadines",
"Salomon (Îles)",
"Samoa",
"São Tomé-et-Principe",
"Sénégal",
"Serbie",
"Seychelles",
"Sierra Leone",
"Singapour",
"Slovaquie",
"Slovénie",
"Somalie",
"Soudan",
"Soudan du Sud",
"Sri Lanka",
"Suède",
"Suisse",
"Suriname",
"Syrie",
"Tadjikistan",
"Tanzanie",
"Tchad",
"Thaïlande",
"Timor oriental",
"Togo",
"Tonga",
"Trinité-et-Tobago",
"Tunisie",
"Turkménistan",
"Turquie",
"Tuvalu",
"Ukraine",
"Uruguay",
"Vanuatu",
"Vatican (Saint-Siège)",
"Venezuela",
"Viêt Nam",
"Yémen",
"Zambie",
"Zimbabwe",
"Vatican (Saint-Siège)",
"Palestine",
"Kosovo",
"Taïwan",
"Sahara occidental",
"Abkhazie",
"Ossétie du Sud",
"Transnistrie",
"République turque de Chypre du Nord",
"Somaliland",
"Artsakh (Haut-Karabagh)"
];


$indicatifs = [
    "+93", "+27", "+355", "+213", "+49", "+376", "+244", "+1-268", "+966", "+54", "+374", "+61", "+43", "+994", "+1-242",
    "+973", "+880", "+1-246", "+32", "+501", "+229", "+975", "+375", "+95", "+591", "+387", "+267", "+55", "+673", "+359",
    "+226", "+257", "+855", "+237", "+1", "+238", "+56", "+86", "+357", "+57", "+269", "+242", "+243", "+850", "+82", "+506",
    "+225", "+385", "+53", "+45", "+253", "+1-767", "+20", "+503", "+971", "+593", "+291", "+34", "+372", "+268", "+1", "+251",
    "+679", "+358", "+33", "+241", "+220", "+995", "+233", "+30", "+1-473", "+502", "+224", "+240", "+245", "+592", "+509",
    "+504", "+36", "+91", "+62", "+964", "+98", "+353", "+354", "+972", "+39", "+1-876", "+81", "+962", "+7", "+254", "+996",
    "+686", "+965", "+856", "+266", "+371", "+961", "+231", "+218", "+423", "+370", "+352", "+389", "+261", "+60", "+265",
    "+960", "+223", "+356", "+212", "+692", "+222", "+230", "+52", "+691", "+373", "+377", "+976", "+382", "+258", "+264",
    "+674", "+977", "+505", "+227", "+234", "+47", "+64", "+968", "+256", "+998", "+92", "+680", "+507", "+675", "+595",
    "+31", "+51", "+63", "+48", "+351", "+974", "+236", "+420", "+40", "+44", "+7", "+250", "+1-869", "+1-758", "+378",
    "+1-784", "+677", "+685", "+239", "+221", "+381", "+248", "+232", "+65", "+421", "+386", "+252", "+249", "+211", "+94",
    "+46", "+41", "+597", "+963", "+992", "+255", "+235", "+66", "+670", "+228", "+676", "+1-868", "+216", "+993", "+90",
    "+688", "+380", "+598", "+678", "+379", "+58", "+84", "+967", "+260", "+263", "+379", "+970", "+383", "+886", "+212",
    "+995", "+995", "+373", "+90", "+252", "+374"
];

$input_id = [
    'nom_user',
    'prenom_user',
    'tel_user',
    'email_user',
    'token',
    'mdp_user',
    'etat_user',
    'communeUser',
    'adresseUser',
];
$data_keys = [
    'nom',
    'prenom',
    'tel',
    'email',
    'token',
    'mdp',
    'etat',
    'commune',
    'adresse',
    
];
?>
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Modifier un element</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editUserForm" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" name="id_user" id="id_user">
                        <div class="col-6 mb-6">
                            <label for="indicatif" class="form-label">
                                INDICATIF
                            </label>
                            <select class="w-100 select" name="indicatif" id="indicatif2">
                                <?php foreach ($indicatifs as $indicatif): ?>
                                <option value="<?= $indicatif ?>"><?= $indicatif ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-6 mb-6">
                            <label for="indicatif" class="form-label">
                                PAYS
                            </label>
                            <select class="w-100 select" name="pays" id="pays2">
                                <?php foreach ($pays as $pays): ?>
                                <option value="<?= $pays ?>"><?= $pays ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                            
                        <?php for ($i = 0; $i < count($data_keys); $i++):
                            $labelle =$data_keys[$i];
                            $field = $data_keys[$i];
                            ?>
                        <div class="col-6 mb-6">
                            <label for="<?= $input_id[$i] ?>" class="form-label">
                                <?= $labelle ?>
                            </label>
                            <input type="<?php echo $field == 'email' ? 'email' : ($field == 'id_user'  || $field == 'etat' ? 'number' : 'text'); ?>"  class="form-control" id="<?= $input_id[$i] ?>2"
                                name="<?= $input_id[$i] ?>"
                                placeholder="<?= $field ?>" />
                        </div>
                        <?php endfor; ?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary" id="editBtn">Modifier</button>
            </div>
        </form>
        </div>
    </div>
</div>