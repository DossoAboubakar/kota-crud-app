<?php
$data_keys = [
    'code',
    'id_zone',
    'zone',
    'libelle_localisation',
    'identifiant',
    'etat'
];
?>

<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Modifier un élément</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="editListeLocalisationForm" enctype="multipart/form-data">

                    <input type="hidden" name="id" id="id" value="">

                    <div class="row">

                        <div class="col-6 mb-6">
                            <label for="id_ville2" class="form-label">Ville</label>
                            <select class="w-100 select" name="indicatif" id="id_ville2">
                                <?php foreach ($records as $record): ?>
                                    <option value="<?= htmlspecialchars($record['id_ville']) ?>">
                                        <?= htmlspecialchars($record['ville']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-6 mb-6">
                            <label for="id_commune2" class="form-label">Commune</label>
                            <select class="w-100 select" name="pays" id="id_commune2">
                                <?php foreach ($records as $record): ?>
                                    <option value="<?= htmlspecialchars($record['id_commune']) ?>">
                                        <?= htmlspecialchars($record['commune']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <?php foreach ($data_keys as $key): ?>
                            <div class="col-6 mb-6">
                                <label for="<?= $key ?>2" class="form-label">
                                    <?= ucfirst(str_replace('_', ' ', $key)) ?>
                                </label>
                                <input 
                                    type="<?= ($key === 'id_user') ? 'number' : 'text' ?>" 
                                    class="form-control" 
                                    id="<?= $key ?>2" 
                                    name="<?= $key ?>" 
                                    placeholder="<?= $key ?>" 
                                />
                            </div>
                        <?php endforeach; ?>

                        <div class="col-6 mb-6">
                            <label for="latitude2" class="form-label">Latitude :</label>
                            <input type="text" id="latitude2" name="latitude2" readonly class="form-control" />
                        </div>
                        <div class="col-6 mb-6">
                            <label for="longitude2" class="form-label">Longitude :</label>
                            <input type="text" id="longitude2" name="longitude2" readonly class="form-control" />
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary" id="editBtn">Modifier</button>
                    </div>

                    <div id="map1" style="height: 300px; margin-top: 15px;"></div>

                </form>
            </div>

        </div>
    </div>
</div>
