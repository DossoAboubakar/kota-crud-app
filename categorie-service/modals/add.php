<?php
use Application\CrudRepository\CrudRequests;
$operations = new CrudRequests();
$categories = $operations->getAllDefault('myclean_categorie', 'id_categorie');
$categories1 = $operations->getAllDefault('myclean_categorie1', 'id_categorie1');?>

<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Ajouter un element</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addAdminForm" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col-6 mb-6">
                            <label for="id_categorie" class="form-label">
                                Categorie
                            </label>
                            <select class="w-100 select form-control" name="id_categorie" id="id_categorie">
                                <option value="">Selectionner une categorie</option>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?= $category['id_categorie'] ?>"><?= $category['libelle_categorie'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-6 mb-6">
                            <label for="id_categorie1" class="form-label">
                                Categorie 1
                            </label>
                            <select class="w-100 select form-control" name="id_categorie1" id="id_categorie1">
                                <option value="">Selectionner une categorie 1</option>
                                <?php foreach ($categories1 as $category1): ?>
                                    <option value="<?= $category1['id_categorie1'] ?>"><?= $category1['libelle_categorie1'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?php for ($i = 1; $i < count($table_fields); $i++):
                        if ($table_fields[$i] === 'etat' || $table_fields[$i] === 'id_categorie1' || $table_fields[$i] === 'id_categorie' ) continue;
                            $labelle =$table_fields[$i];
                            ?>
                        <div class="col-6 mb-6">
                            <label for="<?= $labelle ?>" class="form-label">
                                <?= ucfirst($labelle) ?>
                            </label>
                            <input type="<?= $table_fields[$i] === 'image' ? 'file' : 'text' ?>" class="form-control" id="<?= $labelle ?>1"
                                name="<?= $labelle ?>"
                                placeholder="<?= strtolower($labelle) ?>" />
                        </div>
                        <?php endfor; ?>
                        <div class="col-6 mb-6">
                            <label for="statut" class="form-label">
                                Statut
                            </label>
                            <select class="w-100 select form-control" name="statut" id="statut1">
                                <option value="1">Actif</option>
                                <option value="0">Inactif</option>
                                <option value="99">Bloqué</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" name="addCategorieService" class="btn btn-primary" id="addBtn">Ajouter</button>
            </div>
        </form>
        </div>
    </div>
</div>