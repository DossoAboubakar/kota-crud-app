<?php $sql = "SELECT * FROM myclean_client";
$statement = $operations->connection->prepare($sql);
$statement->execute();
$clients = $statement->fetchAll(\PDO::FETCH_ASSOC); 
?>
<?php $sql = "SELECT * FROM myclean_annonce";
$statement = $operations->connection->prepare($sql);
$statement->execute();
$annonces = $statement->fetchAll(\PDO::FETCH_ASSOC); 
?>
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
                                <?php foreach ($clients as $client): ?>
                                <option value="<?= $client['id_client'] ?>"><?= $client['nom_client'] ?> | <?= $client['prenom_client'] ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>  
                        <div class="col-6 mb-6">
                            <label for="annonce" class="form-label">
                                ANNONCE 
                            </label>
                            <select class="w-100 select" name="annonce" id="id_annonce">
                                <?php foreach ($annonces as $annonce): ?>
                                <option value="<?= $annonce['id_annonce'] ?>"><?= $annonce['libelle_annonce'] ?> | <?= $annonce['prix_annonce'].''.'FCFA' ?> </option>
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