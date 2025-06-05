<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Editer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editVilleForm">
                    <div class="row">
                    <input type="hidden" id="id_ville" name="id_ville"
                    value="" /> 
                       
                        <div class="col-6 mb-6">
                            <label for="ville2" class="form-label">
                                Ville
                            </label>
                            <input type="text" class="form-control" id="ville2"
                                name="ville2"
                                value=""
                                placeholder="Entrez le nom de la ville" />
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
                             