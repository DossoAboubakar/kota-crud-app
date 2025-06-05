
<?php $row = $records[0];
        $id =$data_keys[0];
    ?>                
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Editer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editTypeBienDetailForm">
                    <div class="row">
                    <input type="hidden" id="id_typebien_detail" name="id_typebien_detail"
                    value="" /> 
                       
                        <div class="col-6 mb-6">
                            <label for="libelle_typebien_detailEdit" class="form-label">
                                Libelle
                            </label>
                            <input type="text" class="form-control" id="libelle_typebien_detailEdit"
                                name="libelle_typebien_detailEdit"
                                value=""
                                placeholder="Entrez le libelle" />
                        </div>
                        <div class="col-6 mb-6">
                            <label for="image_typebien_detailEdit" class="form-label">
                                Image
                            </label>
                            <input type="file" class="form-control" id="image_typebien_detailEdit"
                                name="image_typebien_detailEdit"
                                value=""
                                placeholder="Entrez l'image" />
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary" id="editBtn">Modifier</button>
            </div>
        </form>
        </div>
    </div>
</div>
