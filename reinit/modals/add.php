<?php $sql = "SELECT * FROM myclean_client";
$statement = $operations->connection->prepare($sql);
$statement->execute();
$clients = $statement->fetchAll(\PDO::FETCH_ASSOC); 
?>
<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Ajouter un element</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addReinitForm" enctype="multipart/form-data" method="post">
                    <div class="row">
                    <div class="col-6 mb-6">
                            <label for="client" class="form-label">
                                Client 
                            </label>
                            <select class="w-100 select form-control" name="client" id="client1">
                                <?php foreach ($clients as $client): ?>
                                    <?php if(strlen($client['nom_client']) < 0) continue; ?>
                                <option value="<?= $client['id_client'] ?>"><?= $client['nom_client'] ?> <?= $client['prenom_client'] ?> | <?= $client['tel_client'] ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div> 
                        <?php for ($i = 1; $i < count($table_fields); $i++):
                            $labelle =$table_fields[$i];
                            if($labelle == "nom clt" || $labelle == "prenom clt" || $labelle == "numero clt" || $labelle =="etat"){
                                continue;
                            }
                            ?>
                        <div class="col-6 mb-6">
                            <label for="<?= $labelle ?>" class="form-label">
                                <?= ucfirst($labelle) ?>
                            </label>
                            <input type="text" class="form-control" id="<?= $labelle ?>"
                                name="<?= $labelle ?>"
                                placeholder="<?= strtolower($labelle) ?>" />
                        </div>
                        <?php endfor; ?>
                        <div class="col-6 mb-6">
                            <label for="etat" class="form-label">
                                Etat
                            </label>
                            <select class="w-100 select form-control" name="etat" id="etat">
                                <option value="1">Actif</option>
                                <option value="0">Inactif</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" name="addReinit" class="btn btn-primary" id="addBtn">Ajouter</button>
            </div>
        </form>
        </div>
    </div>
</div>