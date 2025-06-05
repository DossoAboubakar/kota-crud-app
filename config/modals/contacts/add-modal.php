<?php $row = $records[0];
$data_keys = [
    'id_contacts',
    'nom',
    'email',
    'telephone',
    'acheteur',
    'locataire',
    'message',
    'etat_contact',
    'indicUser',
    'votrerecherche',
    'libvotrerecherche',
    'votretype',
    'libvotretype',
    'surfacebienmin',
    'surfacebienmax',
    'prixmin',
    'prixmax'
];
$table_fields = [
    'Id',
    'Nom',
    'Email',
    'Telephone',
    'Acheteur',
    'Locataire',
    'Message',
    'Etat contact',
    'IndicUser',
    'Votrerecherche',
    'Libvotrerecherche',
    'Votretype',
    'Libvotretype',
    'Surfacebienmin',
    'Surfacebienmax',
    'Prixmin',
    'Prixmax',
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
                <form id="addContactForm" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-6 mb-6">
                            <label for="id_annonce1" class="form-label">
                                Annonce
                            </label>
                            <select name="id_annonce1" id="id_annonce1" class="form-select select">
                                <option value="">Selectionner une annonce</option>
                                <?php foreach ($records as $record): ?>
                                    <option value="<?= $record['id_annonce'] ?>"><?= $record['annonce'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-6 mb-6">
                            <label for="id_agence1" class="form-label">
                                Agence
                            </label>
                            <select name="id_agence1" id="id_agence1" class="form-select select">
                                <option value="">Selectionner une agence</option>
                                <?php foreach ($records as $record): ?>
                                    <option value="<?= $record['id_agence'] ?>"><?= $record['agence'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?php for ($i = 1; $i < count($data_keys); $i++):
                            $labelle =$data_keys[$i];
                            $field = $table_fields[$i];
                            ?>
                        <div class="col-6 mb-6">
                            <label for="<?= $labelle ?>1" class="form-label">
                                <?= ucfirst($field) ?>`
                            </label>
                            <input type="text" class="form-control" id="<?= $labelle ?>1"
                                name="<?= $labelle ?>"
                                placeholder="<?= strtolower($field) ?>" />
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