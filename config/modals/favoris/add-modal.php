
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
                <form id="addFavorisForm">
                    <div class="row">
                        <div class="col-6 mb-6">
                            <label for="client_of_favoris" class="form-label">
                                CLIENT
                            </label>
                            <select class=" w-100 select" name="client_of_favoris" id="client_of_favoris">
                                <?php foreach ($records as $record): ?>
                                <option value="<?= $record['id_client'] ?>"><?= $record['nom_client'] ?> | <?= $record['prenom_client'] ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>       
                        <div class="col-6 mb-6">
                            <label for="annonce_of_favoris" class="form-label">
                                ANNONCE 
                            </label>
                            <select class=" w-100 select" name="annonce_of_favoris" id="annonce_of_favoris">
                                <?php foreach ($records as $record): ?>
                                <option value="<?= $record['id_annonce'] ?>"><?= $record['libelle_annonce'] ?> | <?= $record['prix_annonce'].''.'FCFA' ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>   
                        <div class="col-6 mt-6 flatpickr" id="datePickerWrap" data-wrap="true">
                        <label for="date_ajout" class="form-label">
                            Date de l'ajout
                        </label>
                            <input type="text" id="date_ajout" name="date_ajout" placeholder="Sélectionner une date..." data-input />
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