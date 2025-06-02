
<?php
$row = $records[0];
?>
<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Ajouter un element</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addImageAgenceForm">
                    <div class="row">
                        <div class="col-6 mb-6">
                            <label for="client" class="form-label">
                                CLIENT
                            </label>
                            <select class="w-100 select" name="client" id="id_client">
                                <?php foreach ($records as $record): ?>
                                <option value="<?= $record['id_client'] ?>"><?= $record['nom_client'] ?> | <?= $record['prenom_client'] ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>  
                        <div class="col-6 mb-6">
                            <label for="annonce" class="form-label">
                                ANNONCE 
                            </label>
                            <select class="w-100 select" name="annonce" id="id_annonce">
                                <?php foreach ($records as $record): ?>
                                <option value="<?= $record['id_annonce'] ?>"><?= $record['libelle_annonce'] ?> | <?= $record['prix_annonce'].''.'FCFA' ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>   
                        <div class="col-6 mt-6 ">
                        <label for="image" class="form-label">
                            IMAGE
                        </label>
                            <input class="form-control" type="file" id="image" name="image" />
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