

<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Modifier un élément</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="editAnnonceForm" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id_annonce" value="">
                    <div class="row">
                            <div class="col-6 mb-6">
                                <label  class="form-label">
                                    Etat
                                </label>
                                <select class="select w-100" name="etat" id="etat_annonce">
                                    <option value="1">Validée</option>
                                    <option value="0">En attente</option>
                                    <option value="99">Bloquée</option>
                                </select>
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
</div> 
