
<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Ajouter une commune</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addCommuneForm">
                    <div class="row">
                        <div class="col-6 mb-6">
                            <label for="libelle_commune1" class="form-label">
                                Nom Commune
                            </label>
                            <input type="text" class="form-control" id="libelle_commune1" name="libelle_commune1"
                                placeholder="Nom Commune" />
                        </div>
                        <div class="col-6 mb-6">
                            <label for="annonce" class="form-label">
                                Ville 
                            </label>
                            <select class="w-100 select form-control" name="annonce" id="id_ville1">
                                <?php foreach ($records as $record): ?>
                                <option value="<?= $record['id_ville'] ?>"><?= $record['nom_ville'] ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div> 
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