
<?php
$row = $records[0];
$id =$data_keys[0];
?>                
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Editer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editCategorieForm">
                    <div class="row">
                    <input type="hidden" id="<?=$id?>Field" name="<?=$id ?>"
                    value="<?= $row[$id] ?>" /> 
                        <?php for ($i = 1; $i < count($data_keys); $i++):
                            $labelle =$data_keys[$i];
                            $field = $table_fields[$i];
                            ?>
                        <div class="col-6 mb-6">
                            <label for="<?= $labelle ?>Field" class="form-label">
                                <?= ucfirst($field) ?>
                            </label>
                            <input type="<?php echo $field == 'Image' || $field == 'Image 1' ? 'file' : 'text' ?>" class="form-control" id="<?= $labelle ?>Field"
                                name="<?= $labelle ?>"
                                value="<?= $row[$labelle] ?>"
                                placeholder="Entrez <?= strtolower($field) ?>" />
                        </div>
                        <?php endfor; ?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary" id="editAnneeBtn">Modifier</button>
            </div>
        </form>
        </div>
    </div>
</div>
