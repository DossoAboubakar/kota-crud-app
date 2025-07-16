       
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Editer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editAdminForm"  method="post">
                    <div class="row">
                    <input type="hidden" class="form-control" id="id2" name="id2"/> 
                        <?php for ($i = 1; $i < count($table_fields); $i++):
                        if ($table_fields[$i] === 'statut') continue;
                            $labelle =$table_fields[$i];
                            ?>
                        <div class="col-6 mb-6">
                            <label for="<?= $labelle ?>" class="form-label">
                                <?= ucfirst($labelle) ?>
                            </label>
                            <input type="text" class="form-control" id="<?= $labelle ?>2"
                                name="<?= $labelle ?>2"
                                placeholder="Entrez <?= strtolower($labelle) ?>" />
                        </div>
                        <?php endfor; ?>
                        <div class="col-6 mb-6">
                            <label for="statut" class="form-label">
                                Statut
                            </label>
                            <select class="w-100 select form-control" name="statut2" id="statut2">
                                <option value="1">Actif</option>
                                <option value="0">Inactif</option>
                                <option value="99">Bloqué</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" name ="editAdmin" class="btn btn-primary" id="editBtn">Modifier</button>
            </div>
        </form>
        </div>
    </div>
</div>
