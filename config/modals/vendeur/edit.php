<?php
$input_id = [
    'id_pro',
    'type_vendeur',
    'mdp_vendeur',
    'description_vendeur',
    'nomsociete',
    'statut',
    'immatriculation',
    'adresse',
    'legerant',
    'lenom',
    'leprenom',
    'indicatif',
    'telephone',
    'email',
    'etat',
    'horaires',
    'equipes',
    'uid',
    'nb_unite'
];
$data_keys = [
    'identifiant professionnel',
    'type',
    'mot de passe',
    'description',
    'nom de la société',
    'statut',
    'immatriculation',
    'adresse',
    'legerant',
    'lenom',
    'leprenom',
    'indicatif',
    'telephone',
    'email',
    'etat',
    'horaires',
    'equipes',
    'uid',
    'nb_unite'
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
                <form id="editVendeurForm" enctype="multipart/form-data">
                    <div class="row">
                    <input type="" id="id_vendeur" name="id_vendeur"
                    value="" /> 
                        <div class="col-6 mb-6">
                            <label for="image" class="form-label">
                                Image
                            </label>
                            <input type="file" class="form-control" id="image2"
                                name="image"
                                placeholder="image" />
                        </div>
                        <?php for ($i = 0; $i < count($data_keys); $i++):
                            $labelle =$data_keys[$i];
                            $field = $data_keys[$i];
                            ?>
                        <div class="col-6 mb-6">
                            <label for="<?= $input_id[$i] ?>" class="form-label">
                                <?= $labelle ?>
                            </label>
                            <input type="<?php echo $field == 'id_vendeur' ? 'number' : 'text'; ?>"  class="form-control" id="<?= $input_id[$i] ?>2"
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