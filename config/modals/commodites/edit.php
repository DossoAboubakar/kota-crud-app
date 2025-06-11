<?php
$input_id = [
    'commodites',
    'ispro',
    'code', 
];
?>
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Modifier un element</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editCommoditeForm" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" id="id" name="id" />
                        <div class="col-6 mb-6">
                            <label for="image" class="form-label">
                                Image
                            </label>
                            <input type="file" class="form-control" id="image2" name="image" />
                        </div>
                        <div class="col-6 mb-6">
                            <label for="activeimage" class="form-label">
                                Active Image
                            </label>
                            <input type="file" class="form-control" id="activeimage2" name="activeimage" />
                        </div>  
                        <div class="col-6 mb-6">

                            <label for="type" class="form-label">
                                Type
                            </label>
                            <select class="w-100 select" name="type" id="type2">
                                <?php foreach ($records as $record): ?>
                                <option value="<?= $record['id_type'] ?>"><?= $record['type'] ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                            
                        <?php for ($i = 0; $i < count($input_id); $i++):
                            $labelle =$input_id[$i];
                            $field = $input_id[$i];
                            ?>
                        <div class="col-6 mb-6">
                            <label for="<?= $input_id[$i] ?>" class="form-label">
                                <?= $labelle ?>
                            </label>
                            <?php if ($field == 'ispro'): ?>
                            <input type="number"  class="form-control" id="<?= $input_id[$i] ?>2"
                                name="<?= $input_id[$i] ?>"
                                placeholder="<?= $labelle ?>" />
                            <?php else: ?>
                            <input type="<?php echo $field == 'id_user' ? 'number' : 'text'; ?>"  class="form-control" id="<?= $input_id[$i] ?>2"
                                name="<?= $input_id[$i] ?>"
                                placeholder="<?= $labelle ?>" />    
                            <?php endif; ?>
                        </div>
                        <?php endfor; ?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary" id="editBtn">Ajouter</button>
            </div>
        </form>
        </div>
    </div>
</div>