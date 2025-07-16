
<?php
$row = $records[0];
?>                
<?php $sql = "SELECT * FROM myclean_client";
$statement = $operations->connection->prepare($sql);
$statement->execute();
$clients = $statement->fetchAll(\PDO::FETCH_ASSOC); 
?>
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Editer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editFavorisForm">
                <div class="row">
                    <input type="hidden" id="id_favoris" name="id_favoris"
                    value="<?= $row['id_favoris'] ?>" /> 
                        <div class="col-6 mb-6">
                            <label for="client_of_favoris" class="form-label">
                                CLIENT
                            </label>
                            <select class="w-100 select" name="client_of_favoris" id="id_client">
                                <?php foreach ($clients as $client): ?>
                                <option value="<?= $client['id_client'] ?>"><?= $client['nom_client'] ?> | <?= $client['prenom_client'] ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>       
                        <div class="col-6 mb-6">
                            <label for="annonce_of_favoris" class="form-label">
                                Annonce
                            </label>
                            <select class=" w-100 select" name="annonce_of_favoris" id="id_annonce">
                                <?php foreach ($records as $record): ?>
                                <option value="<?= $record['id_annonce'] ?>"><?= $record['libelle_annonce'] ?> | <?= $record['prix_annonce'].''.'FCFA' ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>   
                        <div class="col-6 mt-6 flatpickr" id="datePickerWrap" data-wrap="true">
                        <label for="date_ajouter" class="form-label">
                            Date de l'ajout
                        </label>
                            <input type="text" id="date_ajouter" name="date_ajouter" placeholder="Sélectionner une date..." data-input />
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
