<?php $sql = "SELECT * FROM myclean_client";
$statement = $operations->connection->prepare($sql);
$statement->execute();
$clients = $statement->fetchAll(\PDO::FETCH_ASSOC); 
?>
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Modifier un element</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editWebTypeForm" enctype="multipart/form-data" method="post">
                    <div class="row">
                    <input type="hidden" class="form-control" id="id2" name="id2"/> 
                    <div class="col-6 mb-6">
                            <label for="libelle" class="form-label">
                                Libelle 
                            </label>
                            <input type="text" class="form-control" id="libelle2"
                                name="libelle2"
                                placeholder="libelle" />
                        </div> 
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" name="editWebType" class="btn btn-primary" id="editBtn">Ajouter</button>
            </div>
        </form>
        </div>
    </div>
</div>