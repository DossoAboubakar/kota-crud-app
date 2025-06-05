<?php 

$data_keys = [
    'prix',
    'nom',
    'email',
    'telephone',
    'message',
    'motif',
    'etat_contact',
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
                <form id="addSignalementForm" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-6 mb-6">
                            <label for="id_annonce1" class="form-label">
                                Annonce
                            </label>
                            <select name="id_annonce1" id="id_annonce1" class="form-select select">
                                <option value="">Selectionner une annonce</option>
                                <?php foreach ($records as $record): ?>
                                    <option value="<?= $record['id_annonce'] ?>"><?= $record['annonce'] . ' | ' . $record['prix'] . ' FCFA' ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?php for ($i = 0; $i < count($data_keys); $i++):
                            $labelle =$data_keys[$i];
                            $field = $data_keys[$i];
                            ?>
                        <div class="col-6 mb-6">
                            <label for="<?= $labelle ?>" class="form-label">
                                <?= ucfirst($field) ?>
                            </label>
                            <input type="<?php echo $field == 'id_signalement' ? 'hidden' : 'text'; ?>"  class="form-control" id="<?= $labelle ?>1"
                                name="<?= $labelle ?>"
                             placeholder="<?= strtolower($field) ?>" />
                        </div>
                        <?php endfor; ?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary" id="addSignalementBtn">Ajouter</button>
            </div>
        </form>
        </div>
    </div>
</div>