<?php $sql = "SELECT * FROM myclean_ville";
$statement = $operations->connection->prepare($sql);
$statement->execute();
$villes = $statement->fetchAll(\PDO::FETCH_ASSOC); 
?>
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Editer une commune</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editCommuneForm">
                    <div class="row">
                        <input type="hidden" id="id_commune" name="id_commune"
                        value="" /> 
                        <div class="col-6 mb-6">
                            <label for="annonce" class="form-label">
                                Ville 
                            </label>
                            <select class="w-100 select form-control" name="annonce" id="id_ville2">
                                <?php foreach ($villes as $ville): ?>
                                <option value="<?= $ville['id_ville'] ?>"><?= $ville['libelle_ville'] ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div> 
                        <div class="col-6 mb-6">
                            <label for="libelle_commune2" class="form-label">
                                Nom Commune
                            </label>
                            <input type="text" class="form-control" id="libelle_commune2" name="libelle_commune2"
                                placeholder="Nom Commune" />
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary" id="editBtn">Editer</button>
            </div>
        </form>
        </div>
    </div>
</div>