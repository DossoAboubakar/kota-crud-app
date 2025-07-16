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
                <form id="editCategorie1Form" enctype="multipart/form-data" method="post">
                    <div class="row">
                    <input type="hidden" class="form-control" id="id2" name="id2"/> 

                    <div class="col-6 mb-6">
                            <label for="client" class="form-label">
                                Client 
                            </label>
                            <select class="w-100 select form-control" name="client2" id="client2">
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
                            <input type="text" class="form-control" id="<?= $labelle ?>2"
                                name="<?= $labelle ?>2"
                                placeholder="<?= strtolower($labelle) ?>" />
                        </div>
                        <?php endfor; ?>
                        <div class="col-6 mb-6">
                            <label for="etat" class="form-label">
                                Etat
                            </label>
                            <select class="w-100 select form-control" name="etat2" id="etat2">
                                <option value="1">Actif</option>
                                <option value="0">Inactif</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" name="editCategorie1" class="btn btn-primary" id="editBtn">Modifier</button>
            </div>
        </form>
        </div>
    </div>
</div>