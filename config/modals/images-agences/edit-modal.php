
<?php
$row = $records[0];
?>                

<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Editer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editImageAgenceForm">
                <div class="row">
                    <input type="hidden" id="id_image_annonce" name="id_image_annonce"
                    value="<?= $row['id_image_annonce'] ?>" /> 
                        <div class="col-6 mb-6">
                            <label for="id_user" class="form-label">
                                CLIENT
                            </label>
                            <select class="w-100 select" name="client_of_favoris" id="id_user">
                                <?php foreach ($records as $record): ?>
                                <option value="<?= $record['id_client'] ?>"><?= $record['nom_client'] ?> | <?= $record['prenom_client'] ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>       
                        <div class="col-6 mb-6">
                            <label for="id_annonce" class="form-label">
                                Annonce
                            </label>
                            <select class=" w-100 select" name="annonce_of_favoris" id="id_annonce">
                                <?php foreach ($records as $record): ?>
                                <option value="<?= $record['id_annonce'] ?>"><?= $record['libelle_annonce'] ?> | <?= $record['prix_annonce'].''.'FCFA' ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>   
                        <div class="col-6 mt-6 ">
                        <label for="imageAgence" class="form-label">
                            IMAGE
                        </label>
                            <input class="form-control" type="file" id="imageAgence" name="imageAgence" />
                        </div>
                        
       
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
