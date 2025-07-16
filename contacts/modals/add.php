
<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Ajouter un element</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> 
            <div class="modal-body">
                <form id="addContactForm" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <?php for ($i = 1; $i < count($table_fields); $i++):
                        if ($table_fields[$i] === 'etat'|| $table_fields[$i] === 'date creation') continue;
                            $labelle =$table_fields[$i];
                            ?>
                        <div class="col-6 mb-6">
                            <label for="<?= $labelle ?>" class="form-label">
                                <?= ucfirst($labelle) ?>
                            </label>
                            <input type="text" class="form-control" id="<?= $labelle ?>1"
                                name="<?= $labelle ?>"
                                placeholder="<?= strtolower($labelle) ?>" />
                        </div>
                        <?php endfor; ?>
                        <div class="col-6 mb-6">
                            <label for="etat" class="form-label">
                                Statut
                            </label>
                            <select class="w-100 select form-control" name="etat" id="etat1">
                                <option value="1">Actif</option>
                                <option value="0">Inactif</option>
                                <option value="99">Bloqué</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" name="addContact" class="btn btn-primary" id="addBtn">Ajouter</button>
            </div>
        </form>
        </div>
    </div>
</div>