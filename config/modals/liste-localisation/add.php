<?php

$data_keys = [
    'code',
    'id_ville',
    'libelle_ville',
    'id_commune',
    'libelle_commune',
    'id_zone',
    'libelle_zone',
    'libelle_localisation',
    'id_localisation',
    'latitude',
    'longitude',
    'etat'
];


$data_keys = [
    'code_liste',
    'id_ville',
    'libelle_ville',
    'id_commune',
    'libelle_commune',
    'id_zone',
    'libelle_zone',
    'libelle_localisation',
    'id_localisation',
    'latitude',
    'longitude',
    'etat',
    'etat',
    'commune',
    'adresse',
];



?>
<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Ajouter un element</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addUserForm" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-6 mb-6">
                            <label for="indicatif" class="form-label">
                                INDICATIF
                            </label>
                            <select class="w-100 select" name="indicatif" id="indicatif1">
                                <?php foreach ($indicatifs as $indicatif): ?>
                                <option value="<?= $indicatif ?>"><?= $indicatif ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-6 mb-6">
                            <label for="indicatif" class="form-label">
                                PAYS
                            </label>
                            <select class="w-100 select" name="pays" id="pays_user1">
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
                            <input type="<?php echo $field == 'id_user' ? 'number' : 'text'; ?>"  class="form-control" id="<?= $input_id[$i] ?>1"
                                name="<?= $input_id[$i] ?>"
                                placeholder="<?= $field ?>" />
                        </div>
                        <?php endfor; ?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary" id="addBtn">Ajouter</button>
            </div>
        </form>
        </div>
    </div>
</div>